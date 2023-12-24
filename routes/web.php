<?php

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
use App\Http\Controllers\frontend\auth\LoginController;
use App\Http\Controllers\frontend\auth\RegisterController;
use App\Http\Controllers\frontend\AccountController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProjectsController;
use App\Http\Controllers\frontend\RecordController;
use App\Http\Controllers\frontend\WalletController;
use Illuminate\Support\Facades\Route;

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider and all of them will
 * | be assigned to the "web" middleware group. Make something great!
 * |
 */
// Front end Routes
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/wallet', [WalletController::class, 'wallet'])->name('front.wallet_index');
Route::post('/wallet', [WalletController::class, 'wallet'])->name('front.wallet_index');
Route::get('/wallet/record', [WalletController::class, 'record'])->name('record');
Route::get('/wallet/out', [HomeController::class, 'out'])->name('out');
Route::get('/wallet/in', [HomeController::class, 'in'])->name('in');
Route::get('/wallet/pledge', [WalletController::class, 'pledge'])->name('pledge');
Route::post('/wallet/pledge_insert', [WalletController::class, 'pledge_insert'])->name('pledge_insert');
Route::get('/wallet/non_pledge', [WalletController::class, 'non_pledge'])->name('non_pledge');
Route::post('/wallet/non_pledge_insert', [WalletController::class, 'non_pledge_insert'])->name('non_pledge_insert');
Route::get('/wallet/incentive', [HomeController::class, 'incentive'])->name('incentive');

Route::get('/project', [HomeController::class, 'project'])->name('front.project');
Route::get('/startfrom', [HomeController::class, 'startfrom'])->name('startfrom');
Route::get('/nft', [HomeController::class, 'nft'])->name('nft');
Route::get('/mining', [HomeController::class, 'mining'])->name('mining');
Route::get('/insured', [HomeController::class, 'insured'])->name('insured');
Route::get('/highratings', [HomeController::class, 'highratings'])->name('highratings');
Route::get('/freeearnings', [HomeController::class, 'freeearnings'])->name('freeearnings');
Route::get('/detail_rec', [HomeController::class, 'detail_rec'])->name('detail_rec');
Route::get('/aibot', [HomeController::class, 'aibot'])->name('aibot');

Route::get('/insurance', [HomeController::class, 'insurance'])->name('front.insurance');

Route::get('/accounts', [HomeController::class, 'accounts'])->name('front.account');
Route::get('/accounts/about_us', [HomeController::class, 'about_us'])->name('about_us');
Route::get('/accounts/bankcard', [HomeController::class, 'bankcard'])->name('bankcard');
Route::get('/accounts/change_login_password', [HomeController::class, 'change_login_password'])->name('change_login_password');
Route::get('/accounts/change_pay_password', [HomeController::class, 'change_pay_password'])->name('change_pay_password');
Route::get('/accounts/finance_record', [WalletController::class, 'finance_record'])->name('finance_record');

Route::get('/accounts/lucky_draw', [HomeController::class, 'lucky_draw'])->name('lucky_draw');
Route::get('/accounts/message', [HomeController::class, 'message'])->name('message');
Route::get('/accounts/myinfo', [HomeController::class, 'myinfo'])->name('myinfo');
Route::get('/accounts/notice', [HomeController::class, 'notice'])->name('notice');
Route::get('/accounts/profit_record', [HomeController::class, 'profit_record'])
    ->name('profit_record');
Route::get('/accounts/promotion', [HomeController::class, 'promotion'])->name('promotion');
Route::get('/accounts/recharge', [HomeController::class, 'recharge'])->name('front.recharge');

Route::post('/accounts/recharge-modal-view', [AccountController::class, 'modalViewContent'])->name('front.account.modal.view.content');
Route::post('/accounts/recharge-coins', [AccountController::class, 'DepositCoins'])->name('front.account.recharge.coins');

Route::get('/accounts/recharge_record', [HomeController::class,
    'recharge_record'])->name('recharge_record');
Route::get('/accounts/service', [HomeController::class, 'service'])->name('service');
Route::get('/accounts/withraw', [HomeController::class, 'withraw'])->name('withraw');
Route::post('/accounts/withraw_insert', [HomeController::class, 'withraw_insert'])->name('withraw_insert');
Route::get('/accounts/withraw_record', [HomeController::class, 'withraw_record'])
    ->name('withraw_record');

Route::get('/projects/detail_rec', [ProjectsController::class, 'detail_rec'])->name('projects.detail_rec');
Route::get('/projects/aibot', [ProjectsController::class, 'aibot'])->name('projects.aibot');
Route::get('/projects/nft', [ProjectsController::class, 'nft'])->name('projects.nft');
Route::get('/projects/cloud_computing', [ProjectsController::class, 'cloud_computing'])->name('projects.cloud_computing');
Route::get('/projects/newpoint', [ProjectsController::class, 'newpoint'])->name('projects.newpoint');
Route::get('/projects/eyen', [ProjectsController::class, 'eyen'])->name('projects.eyen');
Route::get('/projects/quopi', [ProjectsController::class, 'quopi'])->name('projects.quopi');
Route::get('/projects/noreview', [ProjectsController::class, 'noreview'])->name('projects.noreview');

Route::get('/projects/foxpay', [ProjectsController::class, 'foxpay'])->name('projects.foxpay');
Route::get('/projects/future_trades', [ProjectsController::class, 'future_trades'])->name('projects.future_trades');
Route::get('/projects/netmi', [ProjectsController::class, 'netmi'])->name('projects.netmi');
Route::get('/projects/xedmex', [ProjectsController::class, 'xedmex'])->name('projects.xedmex');
Route::get('/projects/charge_spot', [ProjectsController::class, 'charge_spot'])->name('projects.charge_spot');
Route::get('/projects/trade24', [ProjectsController::class, 'trade24'])->name('projects.trade24');
Route::get('/projects/gminer', [ProjectsController::class, 'gminer'])->name('projects.gminer');
Route::get('/projects/eggzomania', [ProjectsController::class, 'eggzomania'])->name('projects.eggzomania');
Route::get('/projects/centrium', [ProjectsController::class, 'centrium'])->name('projects.centrium');

Route::get('/projects/memeseason', [ProjectsController::class, 'memeseason'])->name('projects.memeseason');
Route::get('/projects/nexium', [ProjectsController::class, 'nexium'])->name('projects.nexium');
Route::get('/projects/banterbits', [ProjectsController::class, 'banterbits'])->name('projects.banterbits');
Route::get('/projects/bitlotto', [ProjectsController::class, 'bitlotto'])->name('projects.bitlotto');
Route::get('/projects/planetary_asset', [ProjectsController::class, 'planetary_asset'])->name('projects.planetary_asset');
Route::get('/projects/intelid', [ProjectsController::class, 'intelid'])->name('projects.intelid');

Route::get('/projects/wintonfinance', [ProjectsController::class, 'wintonfinance'])->name('projects.wintonfinance');
Route::get('/projects/alien_limited', [ProjectsController::class, 'alien_limited'])->name('projects.alien_limited');
Route::get('/projects/city_trade_market', [ProjectsController::class, 'city_trade_market'])->name('projects.city_trade_market');
Route::get('/projects/slotsmarket', [ProjectsController::class, 'slotsmarket'])->name('projects.slotsmarket');
Route::get('/projects/galacti_cash', [ProjectsController::class, 'galacti_cash'])->name('projects.galacti_cash');
Route::get('/projects/minebubbl', [ProjectsController::class, 'minebubbl'])->name('projects.minebubbl');

Route::get('/projects/giogame', [ProjectsController::class, 'giogame'])->name('projects.giogame');
Route::get('/projects/royalq', [ProjectsController::class, 'royalq'])->name('projects.royalq');
Route::get('/projects/xland', [ProjectsController::class, 'xland'])->name('projects.xland');
Route::get('/projects/ufmaa', [ProjectsController::class, 'ufmaa'])->name('projects.ufmaa');
Route::get('/projects/elixxon', [ProjectsController::class, 'elixxon'])->name('projects.elixxon');
Route::get('/projects/cointech2u_bot', [ProjectsController::class, 'cointech2u_bot'])->name('projects.cointech2u_bot');

Route::get('/projects/spectaapp', [ProjectsController::class, 'spectaapp'])->name('projects.spectaapp');
Route::get('/projects/x_weeks', [ProjectsController::class, 'x_weeks'])->name('projects.x_weeks');
Route::get('/projects/excelsiar', [ProjectsController::class, 'excelsiar'])->name('projects.excelsiar');

Route::get('/projects/nine_chronicles', [ProjectsController::class, 'nine_chronicles'])->name('projects.nine_chronicles');
Route::get('/projects/mobox', [ProjectsController::class, 'mobox'])->name('projects.mobox');
Route::get('/projects/bnb_mario', [ProjectsController::class, 'bnb_mario'])->name('projects.bnb_mario');
Route::get('/projects/timicity', [ProjectsController::class, 'timicity'])->name('projects.timicity');
Route::get('/projects/axie_infinity', [ProjectsController::class, 'axie_infinity'])->name('projects.axie_infinity');
Route::get('/projects/skyark_chronicles', [ProjectsController::class, 'skyark_chronicles'])->name('projects.skyark_chronicles');
Route::get('/projects/xland', [ProjectsController::class, 'xland'])->name('projects.xland');
Route::get('/projects/air_ntfs', [ProjectsController::class, 'air_ntfs'])->name('projects.air_ntfs');
Route::get('/projects/tap_fantasy', [ProjectsController::class, 'tap_fantasy'])->name('projects.tap_fantasy');
Route::get('/projects/alien_worlds', [ProjectsController::class, 'alien_worlds'])->name('projects.alien_worlds');
Route::get('/projects/splinterlands', [ProjectsController::class, 'splinterlands'])->name('projects.splinterlands');
Route::get('/projects/cryptoblades', [ProjectsController::class, 'cryptoblades'])->name('projects.cryptoblades');
Route::get('/projects/google_car', [ProjectsController::class, 'google_car'])->name('projects.google_car');
Route::get('/projects/polygonum', [ProjectsController::class, 'polygonum'])->name('projects.polygonum');
Route::get('/projects/illuvium', [ProjectsController::class, 'illuvium'])->name('projects.illuvium');
Route::get('/projects/sidus_hehoes', [ProjectsController::class, 'sidus_hehoes'])->name('projects.sidus_hehoes');
Route::get('/projects/gods_unchained', [ProjectsController::class, 'gods_unchained'])->name('projects.gods_unchained');
Route::get('/projects/guildofguardians', [ProjectsController::class, 'guildofguardians'])->name('projects.guildofguardians');
Route::get('/projects/sandbox_game', [ProjectsController::class, 'sandbox_game'])->name('projects.sandbox_game');
Route::get('/projects/pvu_farmland', [ProjectsController::class, 'pvu_farmland'])->name('projects.pvu_farmland');
Route::get('/projects/wizardia', [ProjectsController::class, 'wizardia'])->name('projects.wizardia');
Route::get('/projects/nft_champions', [ProjectsController::class, 'nft_champions'])->name('projects.nft_champions');
Route::get('/projects/gold_fever', [ProjectsController::class, 'gold_fever'])->name('projects.gold_fever');

Route::get('/projects/apollo_bot', [ProjectsController::class, 'apollo_bot'])->name('projects.apollo_bot');
Route::get('/projects/quadency', [ProjectsController::class, 'quadency'])->name('projects.quadency');
Route::get('/projects/stoic', [ProjectsController::class, 'stoic'])->name('projects.stoic');
Route::get('/projects/kryll', [ProjectsController::class, 'kryll'])->name('projects.kryll');
Route::get('/projects/gunbot_com', [ProjectsController::class, 'gunbot_com'])->name('projects.gunbot_com');
Route::get('/projects/olymp_robot', [ProjectsController::class, 'olymp_robot'])->name('projects.olymp_robot');
Route::get('/projects/u_trading', [ProjectsController::class, 'u_trading'])->name('projects.u_trading');
Route::get('/projects/bigul', [ProjectsController::class, 'bigul'])->name('projects.bigul');
Route::get('/projects/bots_io', [ProjectsController::class, 'bots_io'])->name('projects.bots_io');
Route::get('/projects/crypto_hopper', [ProjectsController::class, 'crypto_hopper'])->name('projects.crypto_hopper');
Route::get('/projects/coin_rules', [ProjectsController::class, 'coin_rules'])->name('projects.coin_rules');
Route::get('/projects/smard', [ProjectsController::class, 'smard'])->name('projects.smard');
Route::get('/projects/zigdao', [ProjectsController::class, 'zigdao'])->name('projects.zigdao');
Route::get('/projects/tradeSanta', [ProjectsController::class, 'tradeSanta'])->name('projects.tradeSanta');
Route::get('/projects/arbitrage_scanner', [ProjectsController::class, 'arbitrage_scanner'])->name('projects.arbitrage_scanner');
Route::get('/projects/pionex', [ProjectsController::class, 'pionex'])->name('projects.pionex');
Route::get('/projects/tat_space', [ProjectsController::class, 'tat_space'])->name('projects.tat_space');
Route::get('/projects/threecommas', [ProjectsController::class, 'threecommas'])->name('projects.threecommas');
Route::get('/projects/cornix', [ProjectsController::class, 'cornix'])->name('projects.cornix');
Route::get('/projects/trality', [ProjectsController::class, 'trality'])->name('projects.trality');

Route::get('/signin', [LoginController::class, 'signin'])->name('front.signin');
Route::get('/signup', [RegisterController::class, 'signup'])->name('front.signup');
Route::post('/register', [RegisterController::class, 'register'])->name('front.register');
Route::post('/login', [LoginController::class, 'login'])->name('front.login.process');
Route::get('/logout', [LoginController::class, 'logout'])->name('front.logout');

Route::post('/check-username-email', [RegisterController::class, 'Check_email_username'])->name('front.check_unique_username_email');

// Backend Routes | Admin and Seller Routes
$adminroutes = function () {
    // Protected Routes
    Route::middleware(['admin'])->group(function () {
        Route::get('/', [AdminController::class, 'dashboard'])->name('admin');
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('profile', [AdminController::class, 'dashboard'])->name('admin.profile');
        Route::namespace('App\Http\Controllers\backend')
            ->name('admin.')
            ->group(function () {
                Route::resource('roles', 'AdminRolesController');
                Route::resource('permissions', 'AdminPermissionsController');
                Route::resource('users', 'AdminUsersController');
            });
        // Route::get('users/transaction-approval', [AdminController::class,'transactionApproval'] )->name('admin.users.transaction.approval');
        Route::get('users/wallet-recharge', [AdminController::class, 'walletRecharge'])->name('admin.users.wallet.recharge');

        Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');

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
    // Public Routes
    Route::get('login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('login', [AdminController::class, 'login']);
};

Route::group(['prefix' => 'admin'], $adminroutes);

Route::get('users/transaction-approval', [AdminController::class, 'transactionApproval'])->name('admin.users.transaction.approval');
Route::get('users/withraw', [AdminController::class, 'withraw'])->name('admin.users.withraw');
Route::get('users/wallet-recharge', [AdminController::class, 'walletRecharge'])->name('admin.users.wallet.recharge');
Route::get('users/wallet-recharge-manually', [AdminController::class, 'walletRechargeManuly'])->name('admin.users.wallet.recharge.manually');
Route::post('users/update-recharge-update', [AdminController::class, 'rechargeUpdate'])->name('admin.wallet.recharge.update');
Route::post('users/withraw', [AdminController::class, 'withrawAllow'])->name('admin.withraw.allow');

Route::post('users/update-status', [AdminController::class, 'statusAction'])->name('admin.update.status');
