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
Route::get("/wallet/record",[HomeController::class,''])->name('wallet_record');

Route::get("/project",[HomeController::class,'project'])->name('project');

Route::get("/insurance",[HomeController::class,'insurance'])->name('insurance');

Route::get("/accounts",[HomeController::class,'accounts'])->name('account');

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