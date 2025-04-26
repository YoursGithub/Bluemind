<?php

namespace App\Http\Controllers\User;

use App\Helpers\FileUploader;
use App\Http\Controllers\Controller;
use App\Models\Investment;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserPageController extends Controller
{

    public function userInvestmentView(Request $request)
    {

        $userId = Auth::user()->id;

        $transactions = Transaction::where('user_id', $userId)->with(['user', 'investment'])->get();

        $combinedTransactions = $this->combineProfitsByInvestment($transactions);


        $refId = $request['refId'] ?? null;


        if ($refId) {

            $transactions = Transaction::when($refId, function ($query) use ($refId, $userId) {
                $investmentId = Investment::where('payment_id', $refId)->where('user_id', $userId)->value('id');
                return $query->where('investment_id', $investmentId);
            })->latest()->get();

            return view('pages.users.transaction.all-user-transactions-table', compact('transactions'));
        }

        $investments = Investment::where('user_id', $userId)->latest()->get();

        return view('pages.users.investment.all-user-investments', compact('investments', 'combinedTransactions'));
    }

    public function combineProfitsByInvestment($transactions)
    {
        return $transactions->groupBy('investment_id')->map(function ($group) {
            $firstTransaction = $group->first();

            $hasCloseLong = $group->contains('direction', 'Close Long');

            // Calculate total profit only if 'Close Long' exists; otherwise, set profit to 0
            $totalProfit = $hasCloseLong ? $group->sum('profit') : 0;


            // Return a combined transaction
            return [
                'investment_id' => $firstTransaction->investment_id,
                'direction' => $firstTransaction->direction,
                'user' => $firstTransaction->user, // Assuming `user` is a relationship
                'investment' => $firstTransaction->investment, // Assuming `investment` is a relationship
                'profit' => $totalProfit, // Combined profit
                'transactions_count' => $group->count(), // Count of combined transactions
                'created_at' => $firstTransaction->created_at,
            ];
        })->values(); // Reset keys for the collection
    }


    public function refInvestmentView(Request $request)
    {
        $shareRefId = Auth::user()->sharing_referral_id;

        $userIds = User::where('parent_referral_id', $shareRefId)->pluck('id');

        $transactions = Transaction::whereIn('user_id', $userIds)->with(['user', 'investment'])->get();

        $combinedTransactions = $this->combineProfitsByInvestment($transactions);

        return view('pages.users.investment.all-referral-investments', compact('combinedTransactions'));
    }

    public function genPhoto($user, $transaction, $formattedProfitPercent, $formattedProfit)
    {

        header("Content-type: image/png");
        header("Content-Disposition: attachment; filename=\"blue-mind.png\"");


        $image = imagecreatefrompng(public_path("images/web/template.png"));

        $white = imagecolorallocate($image, 255, 255, 255);

        $green = imagecolorallocate($image, 0, 150, 100);


        $fontPath = public_path("assets/fonts/PTSerif-Bold.ttf");

        //user name
        imagettftext($image, $size  = 40, 0, $x = 1150, $y = 240, $white, $fontPath, $text =  Str::title($user->name));

        //currency
        imagettftext($image, $size  = 80, 0, $x = 150, $y = 640, $white, $fontPath, $text = "USDT Perpetual");


        //percent
        imagettftext($image, $size  = 120, 0, $x = 150, $y = 800, $green, $fontPath, $text = $formattedProfitPercent);


        //profit amount
        imagettftext($image, $size  = 90, 0, $x = 150, $y = 950, $green, $fontPath, $text = $formattedProfit);



        // date
        imagettftext($image, $size  = 40, 0, $x = 750, $y = 1600, $white, $fontPath, $text = $transaction->created_at);


        //referral code
        imagettftext($image, $size  = 70, 0, $x = 1000, $y = 1800, $white, $fontPath, $text = $user->sharingReferral->code);

        imagepng($image);

        imagedestroy($image);
    }

    public function photo(Request $request)
    {

        $refId = $request->query('refId');

        $transactionId = $request->query('transactionId');

        $transaction = Transaction::find($transactionId);

        $investment = Investment::where('payment_id', $refId)->first();

        if (!$investment || !$transaction) {
            return back()->withErrors(['email' => 'Some error occurred ']);
        }

        $user = Auth::user();

        $profitPercent = $transaction['profit'] / $investment['amount'] * 100;

        $formattedProfitPercent = sprintf("%+.2f%%", $profitPercent);

        $formattedProfit = sprintf("%+.2f", $transaction['profit']);

        $this->genPhoto($user, $transaction,  $formattedProfitPercent, $formattedProfit);
    }

    public function dashboard(Request $request)
    {
        $userId = Auth::user()->id;

        $shareRefId = Auth::user()->sharing_referral_id;

        $userCount = User::where('parent_referral_id', $shareRefId)->count();


        $transactions = Transaction::where('user_id', $userId)->with(['user', 'investment'])->get();

        $totalProfit = $this->combineProfitsByInvestment($transactions)->sum('profit');

        $totalInvestment = Investment::where('user_id', $userId)->sum('amount');

        return view('pages.users.dashboard', compact('totalInvestment', 'totalProfit', 'userCount'));
    }

    public function shareReferralView()
    {
        return view('pages.users.share-referral');
    }

    public function profileView()
    {
        return view('pages.users.profile.profile');
    }

    public function profileUpdate(Request $request)
    {
        // function body
        $validated = $request->validate([
            'name' => 'required|string',
            'phone' => 'required|numeric',
            'profile_image' => 'nullable|image',
        ]);

        if ($request->hasFile('profile_image')) {
            $validated['profile_image'] = FileUploader::upload($request->file('profile_image'), 'profile_image');
        }

        Auth::user()->update($validated);

        return back()->with(['success' => 'Profile Updated']);
    }
}
