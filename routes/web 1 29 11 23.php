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
    FarmhouseController,
    BannersController

};
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

Route::get("/wallet",[HomeController::class,'wallet'])->name('wallet_index');
Route::get("/wallet/record",[HomeController::class,'record'])->name('record');
Route::get("/wallet/out",[HomeController::class,'out'])->name('out');
Route::get("/wallet/in",[HomeController::class,'in'])->name('in');
Route::get("/wallet/pledge",[HomeController::class,'pledge'])->name('pledge');
Route::get("/wallet/non_pledge",[HomeController::class,'non_pledge'])->name('non_pledge');
Route::get("/wallet/incentive",[HomeController::class,'incentive'])->name('incentive');

Route::get("/project",[HomeController::class,'project'])->name('project');
Route::get("/startfrom",[HomeController::class,'startfrom'])->name('startfrom');
Route::get("/nft",[HomeController::class,'nft'])->name('nft');
Route::get("/mining",[HomeController::class,'mining'])->name('mining');
Route::get("/insured",[HomeController::class,'insured'])->name('insured');
Route::get("/highratings",[HomeController::class,'highratings'])->name('highratings');
Route::get("/freeearnings",[HomeController::class,'freeearnings'])->name('freeearnings');
Route::get("/detail_rec",[HomeController::class,'detail_rec'])->name('detail_rec');
Route::get("/aibot",[HomeController::class,'aibot'])->name('aibot');

Route::get("/insurance",[HomeController::class,'insurance'])->name('insurance');

Route::get("/accounts",[HomeController::class,'accounts'])->name('account');
Route::get("/accounts/about_us",[HomeController::class,'about_us'])->name('about_us');
Route::get("/accounts/bankcard",[HomeController::class,'bankcard'])->name('bankcard');
Route::get("/accounts/change_login_password",[HomeController::class,'change_login_password'])->name('change_login_password');
Route::get("/accounts/change_pay_password",[HomeController::class,'change_pay_password'])->name('change_pay_password');
Route::get("/accounts/finance_record",[HomeController::class,'finance_record'])->name('finance_record');

Route::get("/signin",[HomeController::class,'signin'])->name('signin');
Route::get("/signup",[HomeController::class,'signup'])->name('signup');


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
        Route::controller(FarmhouseController::class)->group(function () {
            Route::get('/farmhouse-list', 'index')->name('admin.farmhouse.list');
            Route::get('/create-farmhouse', 'create')->name('admin.farmhouse.create');
            Route::post('/store-farmhouse', 'store')->name('admin.farmhouse.store');
            Route::get('/edit-farmhouse/{id}', 'edit')->name('admin.farmhouse.edit');
            Route::post('/update-farmhouse', 'update')->name('admin.farmhouse.update');
            Route::get('/farmhouse-fetch-multiple-images', 'fetchMultipleImages')->name('admin.farmhouse.multiple.images');
            Route::post('/farmhouse-set-default-images', 'setDefaultImage')->name('admin.farmhouse.set_default.images');
            Route::post('/farmhouse-delete-images', 'DeleteImage')->name('admin.farmhouse.delete.images');

        });
        Route::controller(FarmhouseController::class)->group(function () {
            Route::get('/farmhouse-list', 'index')->name('admin.farmhouse.list');
            Route::get('/create-farmhouse', 'create')->name('admin.farmhouse.create');
            Route::post('/store-farmhouse', 'store')->name('admin.farmhouse.store');
            Route::get('/edit-farmhouse/{id}', 'edit')->name('admin.farmhouse.edit');
            Route::post('/update-farmhouse', 'update')->name('admin.farmhouse.update');
            Route::get('/farmhouse-fetch-multiple-images', 'fetchMultipleImages')->name('admin.farmhouse.multiple.images');
            Route::post('/farmhouse-set-default-images', 'setDefaultImage')->name('admin.farmhouse.set_default.images');
            Route::post('/farmhouse-delete-images', 'DeleteImage')->name('admin.farmhouse.delete.images');

        });

        Route::controller(BannersController::class)->group(function () {
            Route::get('/banners-list', 'index')->name('admin.banner.list');
            Route::get('/create-banner', 'create')->name('admin.banner.create');
            Route::post('/store-banner', 'store')->name('admin.banner.store');
            Route::get('/edit-banner/{id}', 'edit')->name('admin.banner.edit');

        });

    });
    //Public Routes
    Route::get('login', [AdminController::class,'login'])->name('admin.login');
    Route::post('login', [AdminController::class,'login']);
};

Route::group(['prefix' => 'admin'], $adminroutes);