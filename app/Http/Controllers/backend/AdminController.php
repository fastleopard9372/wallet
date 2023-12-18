<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Deposit;
use App\Models\User;
use App\Models\Wallet;
use App\Models\Wallet_control;
use App\Models\Withraw;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    // Display Login Page
    public function login(Request $request)
    {
        if (auth()->guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }

        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required'
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator->errors())->withInput();
            } else {
                $check = $request->all();
                $res = DB::table('users')->where('email', $check['email'])->first();
                if ($res->name == 'Super Admin' || $res->name == 'Admin') {
                    if (Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
                        return redirect()->route('admin.dashboard')->with('success', 'Logged In Successfully');
                    } else {
                        return back()->with('error', 'Invalid Credintails');
                    }
                } else {
                    return back()->with('error', 'Invalid Credintails');
                }
            }
        } else {
            return view('backend.login');
        }
    }

    // Dashboard
    public function dashboard()
    {
        return view('backend.dashboard.index');
    }

    // Logout Admin
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('success', 'Log out Successfully');
    }

    public function transactionApproval()
    {
        $data = DB::table('deposits')
            ->join('users', 'deposits.user_id', '=', 'users.id')
            ->select('deposits.*', 'users.user_name as user_name')
            ->get();
        //  dd($data);
        return view('backend.users.transactionApproval', compact('data'));
    }

    public function walletRecharge(Request $request)
    {
        $data = DB::table('deposits')
            ->join('users', 'deposits.user_id', '=', 'users.id')
            ->select('deposits.*', 'users.user_name as user_name')
            ->where('status', 1)
            ->get();
        // dd($data);
        return view('backend.users.walletRecharge', compact('data'));
    }

    public function walletRechargeManuly(Request $request)
    {
        $data = DB::table('deposits')
            ->join('users', 'deposits.user_id', '=', 'users.id')
            ->select('deposits.*', 'users.user_name as user_name')
            ->where('status', 1)
            ->where('manual_amount_reacharge_by_admin', NULL)
            ->get();
        // dd($data);
        return view('backend.users.walletRechargeManuly', compact('data'));
    }

    public function withraw(Request $request)
    {
        $data = DB::table('withraw')
            ->join('wallet', 'wallet.id', '=', 'withraw.wallet_id')
            ->join('users', 'wallet.user_id', '=', 'users.id')
            ->select('withraw.*', 'users.user_name as user_name', 'users.email as email', 'users.id as user_id', 'wallet.amount as amount', 'wallet.amount as wallet_balance')
            ->distinct()
            ->where('wallet.kind', -2)
            ->get();
        $i = 0;
        foreach ($data as $list) {
            $user_id = $list->user_id;
            $wallet_balance = Wallet::getWallet($user_id);
            $pledge = Wallet::getPledge($user_id);
            $dt = Wallet::getIncome($user_id, $pledge);
            $wallet_balance += $dt['total_income'];
            $non_pledge = Wallet::getNonPledge($user_id);
            $dt1 = Wallet::getIncome($user_id, $non_pledge);
            $wallet_balance += $dt1['total_income'];
            $wallet_balance = number_format($wallet_balance, 3, '.', ',');
            $data[$i]->amount = abs($data[$i]->amount);
            $temp = 0;
            for ($j = $i + 1; $j < count($data); $j++) {
                $temp += abs($data[$j]->amount);
            }
            $data[$i++]->wallet_balance = $wallet_balance + $temp;
        }
        return view('backend.users.withraw', compact('data'));
    }

    public function withrawAllow(Request $request)
    {
        $id = $request->post('id');

        $model = Withraw::find($id);

        if ($model->statue == 0) {
            $model->update(['statue' => 1]);
            return response()->json(['message' => 'Success', 'code' => 200]);
        } elseif ($model->status == 1) {
            $model->update(['statue' => 0]);
            return response()->json(['message' => 'Waiting ', 'code' => 404]);
        }
    }

    public function rechargeUpdate(Request $request)
    {
        $id = $request->post('id');

        $model = Deposit::find($id);
        $model->manual_amount_reacharge_by_admin = $request->post('amount');
        $model->amount_reacharge_date = Carbon::now();
        $model->save();

        $user = User::find($model->user_id);
        $user_TotalCoins = $user->total_coins;
        $user->total_coins = $user_TotalCoins + $request->post('amount');
        $user->save();

        $referralCodeUser = User::where('my_referral_code', $user->referred_by)->first();

        $amount = $request->post('amount');
        $percentage = 5;
        $percentageAmount = ($amount * $percentage) / 100;
        DB::table('commission_earning')->insert([
            'user_id' => $referralCodeUser->id,
            'earning_coins' => $percentageAmount,
            'from_user' => $model->user_id,
            'created_at' => Carbon::now(),
        ]);

        if ($model->id > 0) {
            return redirect()->route('admin.users.wallet.recharge')->with('success', 'Submitted Successfully');
        }

        $data = DB::table('deposits')
            ->join('users', 'deposits.user_id', '=', 'users.id')
            ->select('deposits.*', 'users.user_name as user_name')
            ->where('status', 1)
            ->get();
        // dd($data);
        return view('backend.users.walletRecharge', compact('data'));
    }

    public function statusAction(Request $request)
    {
        $id = $request->post('id');

        $model = Deposit::find($id);

        if ($model->status == 0) {
            $model->update(['status' => 1]);
            return response()->json(['message' => 'Approve', 'code' => 404]);
        } elseif ($model->status == 1) {
            $model->update(['status' => 0]);
            return response()->json(['message' => 'Pending ', 'code' => 200]);
        }
    }
}
