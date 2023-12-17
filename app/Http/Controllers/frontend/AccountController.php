<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\backend\Deposit;
use App\Models\backend\Qrcode;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function modalViewContent(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        // die;

        if (Auth::guard('web')->check()) {
            $user_id = Auth::guard('web')->user()->id;
            $userDetais = User::find($user_id);
            $qrCodeDetails = Qrcode::find($userDetais->qrcode_id);
            $rechargeCoins = $request->recharge_coin;

            // echo '<pre>';
            // print_r($qrCodeDetails);
            // die;
            if ($request->type === 'usdt') {
                return view('frontend.account.ajax.recharge-modal-view', compact('userDetais', 'qrCodeDetails', 'rechargeCoins'));
            }

            if ($request->type === 'trx') {
                return view('frontend.account.ajax.recharge-modal-view', compact('userDetais', 'qrCodeDetails', 'rechargeCoins'));
            }
        }
    }

    public function DepositCoins(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        // die;

        if (Auth::guard('web')->check()) {
            $user_id = Auth::guard('web')->user()->id;
            $deposit = Deposit::create([
                'user_id' => $user_id,
                'txn_id' => $request->txn_id,
                'coins' => $request->coins,
            ]);

            if ($deposit->id > 0) {
                return redirect()->route('front.recharge')->with('success', 'Successfully Recharge');
            }
        }
    }
}
