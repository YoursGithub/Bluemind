<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BankDetail;
use App\Models\Investment;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminInvestmentController extends Controller
{

    public function allInvestmentsView()
    {  
        $investments = Investment::with(['user'])->latest()->get();

        return view('pages.admin.investment.all-investments-table',compact('investments'));
    }

    public function createInvestmentView()
    {  
        $userIds =  BankDetail::where('is_kyc_verified',true)->pluck('user_id') ;

        $users = User::whereIn('id',$userIds)->get() ;

        return view('pages.admin.investment.investment-create-form',compact('users')) ;
    }

    public function createInvestment(Request $request)
    {
        $request->validate([
            'user' => ['required', 'exists:users,id'],
            'currency' => ['required'],
            'amount' => ['required', 'numeric', 'min:0'],
            'date' => ['required','date']
        ]);

        $user = User::find($request->input('user'));

        $investment = Investment::create([
            'user_id' => $user->id,
            'payment_id' => Str::random(30) ,
            'currency' => $request->input('currency') ,
            'amount' => $request->input('amount'),
            'created_at' => $request->input('date'),
        ]);

        return to_route('admin.all-investments')->with('success', 'Investment inserted successfully.');

    }

    public function updateInvestmentView(Investment $inv)
    {  
        $userIds =  BankDetail::where('is_kyc_verified',true)->pluck('user_id') ;

        $users = User::whereIn('id',$userIds)->get() ;

        return view('pages.admin.investment.investment-update-form',compact('users','inv')) ;
    }

    public function updateInvestment(Request $request ,Investment $inv)
    {
        $request->validate([
            'user' => ['required', 'exists:users,id'],
            'currency' => ['required'],
            'amount' => ['required', 'numeric', 'min:0'],
            'date' => ['required','date'] ,
        ]);

        $inv->update([
            'user_id' => $request->input('user') ,
            'currency' => $request->input('currency') ,
            'amount' => $request->input('amount') ,
            'created_at' => $request->input('date')
        ]) ;

        return to_route('admin.all-investments')->with('success', 'Investment updated successfully.');

    }


    public function allTransactionsView(Request $request)
    {
        $refId = $request['refId'] ?? null;

        $transactions = Transaction::when($refId, function ($query) use ($refId) {
            $investmentId = Investment::where('payment_id', $refId)->value('id');
            return $query->where('investment_id', $investmentId);
        })->with(['user'])->latest()->get();
        

        return view('pages.admin.transaction.all-transactions-table',compact('transactions'));
    }


    public function createTransactionView()
    {  
        return view('pages.admin.transaction.transaction-create-form') ;
    }

    public function createTransaction(Request $request)
    {

      $refId =  $request->validate([
        'refference_id' => ['required'],
       ]);

       $transaction = $request->validate([
            'trading' => ['required'],
            'direction' => ['required'],
            'leverage' => ['required'],
            'profit' => ['required','numeric' ],
            'date' => ['required','date']
        ]);


        $investment = Investment::where('payment_id',$refId['refference_id'])->first();

        if(!$investment)
        {
            return back()->withErrors(['refference_id' => 'Invalid refference id.']);
        }

        Transaction::create([
        'trading' => $request->input('trading') ,
        'direction' => $request->input('direction') ,
        'leverage' => $request->input('leverage') ,
        'profit' => $request->input('profit') ,
        'investment_id' => $investment->id ,
        'user_id' => $investment->user_id ,
        'created_at' => $request->input('date') ,
       ]) ;

       return to_route('admin.all-transactions')->with('success', 'Transaction inserted successfully.');

    }

    public function updateTransactionView(Transaction $transac)
    {  
        $transac=Transaction::where('id',$transac->id)->with(['investment'])->first();

        return view('pages.admin.transaction.transaction-update-form',compact('transac')) ;
    }

    public function updateTransaction(Request $request ,Transaction $transac)
    {  
        $refId =  $request->validate([
            'refference_id' => ['required'],
           ]);
    
           $transaction = $request->validate([
                'trading' => ['required'],
                'direction' => ['required'],
                'leverage' => ['required'],
                'profit' => ['required','numeric' ],
                'date' => ['required','date']
            ]);
    
    
            $investment = Investment::where('payment_id',$refId['refference_id'])->first();
    
            if(!$investment)
            {
                return back()->withErrors(['refference_id' => 'Invalid refference id.']);
            }
    
            $transac->update([
            'trading' => $request->input('trading') ,
            'direction' => $request->input('direction') ,
            'leverage' => $request->input('leverage') ,
            'profit' => $request->input('profit') ,
            'investment_id' => $investment->id ,
            'user_id' => $investment->user_id ,
            'created_at' => $request->input('date') ,
           ]) ;

           return to_route('admin.all-transactions')->with('success', 'Transaction updated successfully.');

    }


    
    public function dashboard(Request $request)
    {  
        $investments = Investment::all()->sum('amount');

        $users = User::whereNot('is_admin',1)->count();

        $profit=Transaction::where('direction','Close Long')->sum('profit');


        return view('pages.admin.dashboard',compact('investments','users','profit'));
    }


}
