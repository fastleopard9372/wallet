<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\backend\{
    AdminController,
    AdminProfileController,
    AdminRolesController,
    AdminPermissionsController,
    AdminUsersController,
    GeneralSettingsController,
    ContentMGTController,
    QrcodeController

};
use App\Http\Controllers\frontend\auth\RegisterController;
use App\Http\Controllers\frontend\auth\LoginController;
use App\Http\Controllers\frontend\AccountController;


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
//Front end Routes
Route::get("/",[HomeController::class,'index'])->name('home');

Route::get("/wallet",[HomeController::class,'wallet'])->name('front.wallet_index');
Route::get("/wallet/record",[HomeController::class,'record'])->name('record');
Route::get("/wallet/out",[HomeController::class,'out'])->name('out');
Route::get("/wallet/in",[HomeController::class,'in'])->name('in');
Route::get("/wallet/pledge",[HomeController::class,'pledge'])->name('pledge');
Route::get("/wallet/non_pledge",[HomeController::class,'non_pledge'])->name('non_pledge');
Route::get("/wallet/incentive",[HomeController::class,'incentive'])->name('incentive');

Route::get("/project",[HomeController::class,'project'])->name('front.project');
Route::get("/startfrom",[HomeController::class,'startfrom'])->name('startfrom');
Route::get("/nft",[HomeController::class,'nft'])->name('nft');
Route::get("/mining",[HomeController::class,'mining'])->name('mining');
Route::get("/insured",[HomeController::class,'insured'])->name('insured');
Route::get("/highratings",[HomeController::class,'highratings'])->name('highratings');
Route::get("/freeearnings",[HomeController::class,'freeearnings'])->name('freeearnings');
Route::get("/detail_rec",[HomeController::class,'detail_rec'])->name('detail_rec');
Route::get("/aibot",[HomeController::class,'aibot'])->name('aibot');

Route::get("/insurance",[HomeController::class,'insurance'])->name('front.insurance');

Route::get("/accounts",[HomeController::class,'accounts'])->name('front.account');
Route::get("/accounts/about_us",[HomeController::class,'about_us'])->name('about_us');
Route::get("/accounts/bankcard",[HomeController::class,'bankcard'])->name('bankcard');
Route::get("/accounts/change_login_password",[HomeController::class,'change_login_password'])->name('change_login_password');
Route::get("/accounts/change_pay_password",[HomeController::class,'change_pay_password'])->name('change_pay_password');
Route::get("/accounts/finance_record",[HomeController::class,'finance_record'])->name('finance_record');


Route::get("/accounts/lucky_draw",[HomeController::class,'lucky_draw'])->name
('lucky_draw');
Route::get("/accounts/message",[HomeController::class,'message'])->name
('message');
Route::get("/accounts/myinfo",[HomeController::class,'myinfo'])->name('myinfo');
Route::get("/accounts/notice",[HomeController::class,'notice'])->name('notice');
Route::get("/accounts/profit_record",[HomeController::class,'profit_record'])
->name('profit_record');
Route::get("/accounts/promotion",[HomeController::class,'promotion'])->name
('promotion');
Route::get("/accounts/recharge",[HomeController::class,'recharge'])->name
('front.recharge');

Route::post("/accounts/recharge-modal-view",[AccountController::class,'modalViewContent'])->name
('front.account.modal.view.content');
Route::post("/accounts/recharge-coins",[AccountController::class,'DepositCoins'])->name
('front.account.recharge.coins');

Route::get("/accounts/recharge_record",[HomeController::class,
'recharge_record'])->name('recharge_record');
Route::get("/accounts/service",[HomeController::class,'service'])->name
('service');
Route::get("/accounts/withraw",[HomeController::class,'withraw'])->name
('withraw');
Route::get("/accounts/withraw_record",[HomeController::class,'withraw_record'])
->name('withraw_record');



Route::get("/signin",[LoginController::class,'signin'])->name('front.signin');
Route::get("/signup",[RegisterController::class,'signup'])->name('front.signup');
Route::post("/register",[RegisterController::class,'register'])->name('front.register');
Route::post("/login",[LoginController::class,'login'])->name('front.login.process');
Route::get("/logout",[LoginController::class,'logout'])->name('front.logout');

Route::post("/check-username-email",[RegisterController::class,'Check_email_username'])->name('front.check_unique_username_email');

//Backend Routes | Admin and Seller Routes
$adminroutes =  function () {

    //Protected Routes
    Route::middleware(['admin'])->group(function () {
        Route::get('/', [AdminController::class,'dashboard'] )->name('admin');
        Route::get('dashboard', [AdminController::class,'dashboard'] )->name('admin.dashboard');
        Route::get('profile', [AdminController::class,'dashboard'] )->name('admin.profile');
        Route::namespace('App\Http\Controllers\backend')->name('admin.')
        ->group(function(){
            Route::resource('roles','AdminRolesController');
            Route::resource('permissions','AdminPermissionsController');
            Route::resource('users','AdminUsersController');
        });

        Route::get('logout', [AdminController::class,'logout'])->name('admin.logout');

        Route::controller(GeneralSettingsController::class)->group(function () {
            Route::get('/general-settings', 'create')->name('admin.general.settings');
            Route::post('/general-settings-store', 'store')->name('admin.general.settings.store');
        });
        Route::controller(ContentMGTController::class)->group(function () {
            Route::get('/content-list', 'index')->name('admin.content.list');
            Route::get('/create-content', 'create')->name('admin.content.create');
            Route::post('/store-content', 'store')->name('admin.content.store');
            Route::get('/edit-content/{id}', 'edit')->name('admin.content.edit');
        });
        Route::controller(QrcodeController::class)->group(function () {
            Route::get('/qr-code-list', 'index')->name('admin.qrcode.list');
            Route::get('/qr-data-create', 'create')->name('admin.create');
            Route::get('/qr-update/{id}', 'edit')->name('admin.update.qr');
            Route::post('/qr-data-store', 'store')->name('admin.store.qrcode.data');
            Route::post('/check-wallet_address-unique', 'wallet_address_unique')->name('admin.check.wallet_address.unique');
        });
        // Route::post('/qr-data-store', [QrcodeController::class,'store'])->name('admin.store.qr.code.data');
        // Route::post('/qr-code-data-admin', 'QrcodeController@store')->name('admin.store.qr.code.data');



    });
    //Public Routes
    Route::get('login', [AdminController::class,'login'])->name('admin.login');
    Route::post('login', [AdminController::class,'login']);
};

Route::group(['prefix' => 'admin'], $adminroutes);
