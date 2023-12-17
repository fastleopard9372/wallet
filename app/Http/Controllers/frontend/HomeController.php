<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\backend\Banners;
use App\Models\Account;
use App\Models\User;
use App\Models\Wallet;
use App\Models\Wallet_control;
use App\Models\Withraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // Home Page
    public function index(Request $request)
    {
        return view('frontend.home');
    }

    public function project(Request $request)
    {
        return view('frontend.projects.project_index');
    }

    public function startfrom(Request $request)
    {
        return view('frontend.projects.startfrom');
    }

    public function nft(Request $request)
    {
        return view('frontend.projects.nft');
    }

    public function mining(Request $request)
    {
        return view('frontend.projects.mining');
    }

    public function insured(Request $request)
    {
        return view('frontend.projects.insured');
    }

    public function highratings(Request $request)
    {
        return view('frontend.projects.highratings');
    }

    public function freeearnings(Request $request)
    {
        return view('frontend.projects.freeearnings');
    }

    public function detail_rec(Request $request)
    {
        return view('frontend.projects.detail_rec');
    }

    public function aibot(Request $request)
    {
        return view('frontend.projects.aibot');
    }

    /* --------------Wallet -------------- */
    public function wallet(Request $request)
    {
        if (Auth::guard('web')->check()) {
            return view('frontend.wallet.wallet_index');
        } else {
            return redirect()->route('front.signin')->with('error', 'Please login first');
        }
    }

    public function record(Request $request)
    {
        return view('frontend.wallet.record');
    }

    public function out(Request $request)
    {
        if (Auth::guard('web')->check()) {
            $user_id = Auth::guard('web')->user()->id;

            $wallet_balance = Wallet::getWallet($user_id);
            $pledge = Wallet::getPledge($user_id);
            $dt = Wallet::getIncome($user_id, $pledge);
            $wallet_balance += $dt['total_income'];
            $non_pledge = Wallet::getNonPledge($user_id);
            $dt1 = Wallet::getIncome($user_id, $non_pledge);
            $wallet_balance += $dt1['total_income'];
            $wallet_balance = number_format($wallet_balance, 3, '.', ',');
            return view('frontend.wallet.out', compact('wallet_balance'));
        } else {
            return redirect()->route('front.signin')->with('error', 'Please login first');
        }
    }

    public function in(Request $request)
    {
        $user_id = Auth::guard('web')->user()->id;
        $totalEarningCoins = DB::table('commission_earning')->where('user_id', $user_id)->get()->sum('earning_coins');

        return view('frontend.wallet.in', compact('totalEarningCoins'));
    }

    public function pledge(Request $request)
    {
        return view('frontend.wallet.pledge');
    }

    public function non_pledge(Request $request)
    {
        return view('frontend.wallet.non_pledge');
    }

    public function incentive(Request $request)
    {
        return view('frontend.wallet.incentive');
    }

    public function insurance(Request $request)
    {
        return view('frontend.insurance.insurance_index');
    }

    public function accounts(Request $request)
    {
        if (Auth::guard('web')->check()) {
            $user_id = Auth::guard('web')->user()->id;
            $totalEarningCoins = DB::table('commission_earning')->where('user_id', $user_id)->get()->sum('earning_coins');

            $data['wallet_balance'] = Wallet::getWallet($user_id);
            $data['is_start'] = Wallet::getWallet($user_id) > 20 ? 1 : 0;

            $data['wallet_control'] = DB::table('wallet_control')->where('user_id', $user_id)->where('wallet_action', 1)->orderBy('created_at')->first();

            $pledge = Wallet::getPledge($user_id);
            $dt = Wallet::getIncome($user_id, $pledge);
            $data['wallet_balance'] += $dt['total_income'];
            $data['today_income'] = number_format($dt['today_income'], 2, '.', ',');
            $data['total_income'] = number_format($dt['total_income'], 2, '.', ',');
            $data['month_income'] = number_format($dt['month_income'], 2, '.', ',');
            $data['income'] = number_format($dt['income'], 2, '.', ',');

            $non_pledge = Wallet::getNonPledge($user_id);
            $dt1 = Wallet::getIncome($user_id, $non_pledge);
            $data['wallet_balance'] += $dt1['total_income'];
            $data['wallet_balance'] = number_format($data['wallet_balance'], 2, '.', ',');
            $data['today_income'] += number_format($dt1['today_income'], 2, '.', ',');
            $data['total_income'] += number_format($dt1['total_income'], 2, '.', ',');
            $data['month_income'] += number_format($dt1['month_income'], 2, '.', ',');
            $data['income'] += number_format($dt1['income'], 2, '.', ',');

            $data['length'] = count($pledge) * 1 + count($non_pledge);
            return view('frontend.account.account_index', compact('totalEarningCoins', 'data'));
        } else {
            return redirect()->route('front.signin')->with('error', 'Please login first');
        }
    }

    public function lucky_draw(Request $request)
    {
        return view('frontend.account.lucky_draw');
    }

    public function message(Request $request)
    {
        return view('frontend.account.message');
    }

    public function myinfo(Request $request)
    {
        return view('frontend.account.myinfo');
    }

    public function notice(Request $request)
    {
        return view('frontend.account.notice');
    }

    public function profit_record(Request $request)
    {
        return view('frontend.account.profit_record');
    }

    public function promotion(Request $request)
    {
        return view('frontend.account.promotion');
    }

    public function recharge(Request $request)
    {
        return view('frontend.account.recharge');
    }

    public function recharge_record(Request $request)
    {
        if (Auth::guard('web')->check()) {
            $user_id = Auth::guard('web')->user()->id;

            $data = DB::table('deposits')->where('user_id', $user_id)->orderbyDesc('id')->get();

            return view('frontend.account.recharge_record', compact('data'));
        } else {
            return redirect()->route('front.signin')->with('error', 'Please login first');
        }
    }

    public function service(Request $request)
    {
        return view('frontend.account.service');
    }

    public function withraw(Request $request)
    {
        if (Auth::guard('web')->check()) {
            $user_id = Auth::guard('web')->user()->id;

            $totalEarningCoins = DB::table('commission_earning')->where('user_id', $user_id)->get()->sum('earning_coins');
            $data['wallet_balance'] = Wallet::getWallet($user_id);
            $pledge = Wallet::getPledge($user_id);
            $dt = Wallet::getIncome($user_id, $pledge);
            $data['wallet_balance'] += $dt['total_income'];
            $data['today_income'] = number_format($dt['today_income'], 2, '.', ',');
            $data['total_income'] = number_format($dt['total_income'], 2, '.', ',');
            $data['month_income'] = number_format($dt['month_income'], 2, '.', ',');
            $data['income'] = number_format($dt['income'], 2, '.', ',');

            $non_pledge = Wallet::getNonPledge($user_id);
            $dt1 = Wallet::getIncome($user_id, $non_pledge);
            $data['wallet_balance'] += $dt1['total_income'];
            $data['wallet_balance'] = number_format($data['wallet_balance'], 2, '.', ',');
            $data['today_income'] += number_format($dt1['today_income'], 2, '.', ',');
            $data['total_income'] += number_format($dt1['total_income'], 2, '.', ',');
            $data['month_income'] += number_format($dt1['month_income'], 2, '.', ',');
            $data['income'] += number_format($dt1['income'], 2, '.', ',');
            $msg = '';
            return view('frontend.account.withraw', compact('totalEarningCoins', 'msg', 'data'));
        } else {
            return redirect()->route('front.signin')->with('error', 'Please login first');
        }
    }

    public function withraw_insert(Request $request)
    {
        if (Auth::guard('web')->check()) {
            $user_id = Auth::guard('web')->user()->id;
            if ($request->post('withraw_amount') !== NULL) {
                $wallet = new Wallet;
                $wallet->user_id = $user_id;
                $wallet->amount = -$request->post('withraw_amount');
                $wallet->wallet_cnt_id = 0;
                $wallet->kind = -2;
                if ($wallet->save()) {
                    $withraw = new Withraw;
                    $withraw->wallet_id = $wallet->id;
                    $bank_card = Crypt::encryptString($request->post('bank_card_select'));
                    $withraw->payment_method = $bank_card;
                    $withraw->statue = 0;
                    $withraw->save();
                }
            }
            return $this->withraw_record($request);
        } else {
            return redirect()->route('front.signin')->with('error', 'Please login first');
        }
    }

    public function withraw_record(Request $request)
    {
        if (Auth::guard('web')->check()) {
            $user_id = Auth::guard('web')->user()->id;
            $msg = '';
            if ($request->post('withraw_amount') !== NULL || $request->post('withraw_amount') != 0 || $request->post('withraw_amount') != '')
                $msg = 'waiting...';
            $data = Wallet::query()
                ->leftJoin('withraw', 'wallet.id', '=', 'withraw.wallet_id')
                ->select('withraw.id as withraw_id', 'wallet_id', 'kind', 'payment_method', 'statue', 'user_id', 'amount', 'withraw.created_at as created_at', 'withraw.updated_at')
                ->distinct()
                ->where('wallet.user_id', $user_id)
                ->where('wallet.kind', -2)
                ->orderbyDesc('withraw_id')
                ->get();
            return view('frontend.account.withraw_record', compact('msg', 'data'));
        } else {
            return redirect()->route('front.signin')->with('error', 'Please login first');
        }
    }

    public function about_us(Request $request)
    {
        return view('frontend.account.about_us');
    }

    public function bankcard(Request $request)
    {
        return view('frontend.account.bankcard');
    }

    public function change_login_password(Request $request)
    {
        return view('frontend.account.change_login_password');
    }
}
