<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminInvestmentController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\BranchController;
use App\Http\Controllers\Admin\ExportController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\MiscPageController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TermsController;
use App\Http\Controllers\ForgetPasswordController;
use App\Http\Controllers\User\EmailVerificationController;
use App\Http\Controllers\User\UserAuthController;
use App\Http\Controllers\User\UserKycController;
use App\Http\Controllers\User\UserPageController;
use App\Models\Gallery;
use App\Models\ReferralCode;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//user verify mail
Route::get('/email/verify/{id}/{hash}/{custom_token}', [EmailVerificationController::class, 'verify'])
    ->name('verification.verify')
    ->middleware(['signed']);


Route::get('/logout', [UserAuthController::class, 'logout'])->name('logout');


//forget password
Route::prefix('password')->group(function () {
    Route::post('/change', [ForgetPasswordController::class, 'changePassword'])->name('password.change');
    Route::get('/forgot', [ForgetPasswordController::class, 'showForgotPasswordForm'])->name('password.forgot');
    Route::post('/forgot', [ForgetPasswordController::class, 'sendResetLink'])->name('password.forgot');
    Route::get('/reset', [ForgetPasswordController::class, 'showResetPasswordForm'])->name('password.reset.form');
    Route::post('/reset', [ForgetPasswordController::class, 'resetPassword'])->name('password.reset');
});



// admin routes
Route::prefix('admin')->as('admin.')->middleware(['isLoggedIn'])->controller(AdminAuthController::class)->group(function () {

    Route::get('/login', 'loginView')->name('login');
    Route::post('/login', 'login')->name('login');
});


Route::prefix('admin')->as('admin.')->middleware('isAdmin')->group(function () {

    Route::post('/export-csv', [ExportController::class, 'export'])->name('export-csv');


    Route::get('/delete/{model}/{id}', function ($model, $id) {

        try {

            $class = "\\App\\Models\\$model";

            $class::destroy($id);
            return redirect()->back()->with('success', 'Record deleted successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error' => 'Model not found']);
        }
    })->name('delete-model');



    Route::controller(GalleryController::class)->group(function () {

        Route::get('/all-gallery', 'allGalleryView')->name('all-gallery');

        Route::get('/create-gallery', 'createGalleryView')->name('create-gallery');
        Route::post('/create-gallery', 'createGallery')->name('create-gallery');

        Route::get('/update-gallery/{id}', 'updateGalleryView')->name('update-gallery');
        Route::post('/update-gallery/{id}', 'updateGallery')->name('update-gallery');

        Route::get('/delete-gallery/{id}', 'deleteGallery')->name('delete-gallery');
    });

    Route::controller(TermsController::class)->group(function () {
        Route::get('/all-terms', 'allTermsView')->name('all-terms');

        Route::get('/create-terms', 'createTermsView')->name('create-terms');
        Route::post('/create-terms', 'createTerms')->name('create-terms');

        Route::get('/update-terms/{id}', 'updateTermsView')->name('update-terms');
        Route::post('/update-terms/{id}', 'updateTerms')->name('update-terms');

        Route::get('/delete-terms/{id}', 'deleteTerms')->name('delete-terms');
    });


    Route::controller(MiscPageController::class)->group(function () {

        Route::get('/home-settings', 'homeSettingsView')->name('home-settings');
        Route::post('/home-settings', 'homeSettingsCreate')->name('home-settings');

        Route::get('/about-settings', 'aboutSettingsView')->name('about-settings');
        Route::post('/about-settings', 'aboutSettingsCreate')->name('about-settings');

        Route::get('/contact-settings', 'contactSettingsView')->name('contact-settings');
        Route::post('/contact-settings', 'contactSettingsCreate')->name('contact-settings');

        Route::get('/social-settings', 'socialSettingsView')->name('social-settings');
        Route::post('/social-settings', 'socialSettingsCreate')->name('social-settings');

        Route::get('/download-settings', 'downloadSettingsView')->name('download-settings');
        Route::post('/download-settings', 'downloadSettingsCreate')->name('download-settings');
    });


    Route::controller(BranchController::class)->group(function () {

        Route::get('/all-branches', 'allBranchesView')->name('all-branches');

        Route::get('/create-branch', 'singleBranchView')->name('create-branch');
        Route::post('/create-branch', 'singleBranchCreate')->name('create-branch');

        Route::get('/delete-branch/{id}', 'singleBranchDelete')->name('delete-branch');
    });


    Route::controller(TeamController::class)->group(function () {

        Route::get('/all-team-members', 'allTeamsView')->name('all-teams');

        Route::get('/create-team-member', 'singleTeamView')->name('create-team');
        Route::post('/create-team-member', 'singleTeamCreate')->name('create-team');

        Route::get('/delete-team-member/{id}', 'singleTeamDelete')->name('delete-team');
    });


    Route::controller(AdminUserController::class)->group(function () {


        Route::get('/all-users', 'allUsersView')->name('all-users');
        Route::get('/generate-referral/{user}', 'generateReferral')->name('generate-referral');


        Route::get('/create-user', 'createUserView')->name('create-user');
        Route::post('/create-user', 'createUser')->name('create-user');


        Route::get('/all-users-kyc/{status}', 'allUsersKycView')->whereIn('status', ['active', 'pending'])->name('all-kyc-view');

        Route::get('/user-kyc/view/{user}', 'userKycView')->name('user-kyc-view');

        Route::get('/user-kyc/update/{user}', 'userKycUpdateView')->name('user-kyc-update');
        Route::post('/user-kyc/update/{kycId}', 'userKycUpdate')->name('user-kyc-update-post');



        Route::get('/user-kyc/{kycId}/{status}', 'userKycStatus')->whereIn('status', ['accept', 'reject'])->name('user-kyc-status');


        Route::get('/user-email-verify/{user}', 'userEmailVerify')->name('user-email-verify');
    });


    Route::controller(AdminInvestmentController::class)->group(function () {

        Route::get('/dash', 'dashboard')->name('dashboard');


        Route::get('/all-investments', 'allInvestmentsView')->name('all-investments');

        Route::get('/create-investment', 'createInvestmentView')->name('create-investment');
        Route::post('/create-investment', 'createInvestment')->name('create-investment');

        Route::get('/update-investment/{inv}', 'updateInvestmentView')->name('update-investment');
        Route::post('/update-investment/{inv}', 'updateInvestment')->name('update-investment');


        Route::get('/all-transactions', 'allTransactionsView')->name('all-transactions');

        Route::get('/create-transaction', 'createTransactionView')->name('create-transaction');
        Route::post('/create-transaction', 'createTransaction')->name('create-transaction');

        Route::get('/update-transaction/{transac}', 'updateTransactionView')->name('update-transaction');
        Route::post('/update-transaction/{transac}', 'updateTransaction')->name('update-transaction');
    });
});

//user routes
Route::controller(UserAuthController::class)->middleware(['isLoggedIn'])->group(function () {

    Route::get('/register', 'registerView')->name('register');
    Route::post('/register', 'register')->name('register');

    Route::get('/login', 'loginView')->name('login');
    Route::post('/login', 'login')->name('login');
});

Route::as('user.')->middleware(['auth', 'isVerified'])->group(function () {


    Route::controller(UserKycController::class)->group(function () {

        Route::get('/user-kyc', 'kycView')->name('kyc');
        Route::post('/user-kyc', 'kyc')->name('kyc');
    });

    Route::controller(UserPageController::class)->group(function () {

        Route::get('/user-investments', 'userInvestmentView')->name('investments');
        Route::get('/referral-investments', 'refInvestmentView')->name('refInvestments');

        Route::get('/photo', 'photo')->name('photo');

        Route::get('/dashboard', 'dashboard')->name('dashboard');

        Route::get('/share-referral', 'shareReferralView')->name('shareReferral');

        Route::get('/profile', 'profileView')->name('profile');
        Route::post('/profile', 'profileUpdate')->name('profile');
    });
});


Route::middleware(['auth'])->group(function () {
    Route::view('account-settings', 'account-settings');
});


//static files
Route::view('/', 'static.index');
Route::view('/about', 'static.about');
Route::view('/contact', 'static.contact');
Route::view('/terms', 'static.terms');

Route::view('/investment', 'static.investment');
Route::view('/roadmap', 'static.roadmap');
Route::view('/promoters', 'static.referral');
Route::view('/gallery', 'static.gallery');
Route::view('/projects', 'static.projects');

Route::get('/gallery/{id}', function (Gallery $id) {

    $gallery = $id;

    return view('static.gallery-view', compact('gallery'));
});
