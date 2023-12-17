<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Models\Wallet;
use App\Models\Wallet_control;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WalletController extends Controller
{
	/* --------------Wallet -------------- */

	public function wallet(Request $request)
	{
		if (Auth::guard('web')->check()) {
			$user_id = Auth::guard('web')->user()->id;
			if ($request->post('transfer_coin') !== NULL) {
				$account = new Account;
				$account->user_id = $user_id;
				$account->earning_coins = -$request->transfer_coin;
				if ($request->post('kind') == 'out')
					$account->earning_coins = $request->transfer_coin;
				$account->from_user = $user_id;
				$wallet = new Wallet;
				$wallet->user_id = $user_id;
				$wallet->amount = $request->transfer_coin;
				if ($request->post('kind') == 'out')
					$wallet->amount = -$request->transfer_coin;
				$wallet->kind = -1;
				if ($account->save())
					$wallet->save();
			}
			$data['wallet_balance'] = Wallet::getWallet($user_id);
			$data['is_start'] = Wallet::getWallet($user_id) > 20 ? 1 : 0;

			$data['wallet_control'] = DB::table('wallet_control')->where('user_id', $user_id)->where('wallet_action', 1)->orderBy('created_at')->first();

			$pledge = Wallet::getPledge($user_id);
			$dt = Wallet::getIncome($user_id, $pledge);
			$data['wallet_balance'] += $dt['total_income'];
			$data['today_income'] = number_format($dt['today_income'], 3, '.', ',');
			$data['total_income'] = number_format($dt['total_income'], 3, '.', ',');
			$data['month_income'] = number_format($dt['month_income'], 3, '.', ',');
			$data['income'] = number_format($dt['income'], 3, '.', ',');

			$non_pledge = Wallet::getNonPledge($user_id);
			$dt1 = Wallet::getIncome($user_id, $non_pledge);
			$data['wallet_balance'] += $dt1['total_income'];
			$data['wallet_balance'] = number_format($data['wallet_balance'], 3, '.', ',');
			$data['today_income'] += number_format($dt1['today_income'], 3, '.', ',');
			$data['total_income'] += number_format($dt1['total_income'], 3, '.', ',');
			$data['month_income'] += number_format($dt1['month_income'], 3, '.', ',');
			$data['income'] += number_format($dt1['income'], 3, '.', ',');

			$data['length'] = count($pledge) * 1 + count($non_pledge);

			return view('frontend.wallet.wallet_index', compact('data'));
		} else {
			return redirect()->route('front.signin')->with('error', 'Please login first');
		}
	}

	public function pledge(Request $request)
	{
		if (Auth::guard('web')->check()) {
			// $wallet=Wallet::where('email',$request->email)->first();
			$user_id = Auth::guard('web')->user()->id;
			$data['wallet_balance'] = Wallet::getWallet($user_id);
			$data['is_start'] = Wallet::getWallet($user_id) > 20 ? 1 : 0;
			$data['pledge'] = Wallet::getPledge($user_id);
			$data['live_pledge'] = Wallet::getPledge($user_id);

			$data['wallet_control'] = DB::table('wallet_control')->where('user_id', $user_id)->where('wallet_action', 1)->orderBy('created_at')->first();

			$dt = Wallet::getIncome($user_id, $data['pledge']);
			$data['wallet_balance'] += $dt['total_income'];
			$data['wallet_balance'] = number_format($data['wallet_balance'], 3, '.', ',');
			$data['today_income'] = number_format($dt['today_income'], 3, '.', ',');
			$data['total_income'] = number_format($dt['total_income'], 3, '.', ',');
			$data['month_income'] = number_format($dt['month_income'], 3, '.', ',');
			$data['income'] = number_format($dt['income'], 3, '.', ',');
			return view('frontend.wallet.pledge', compact('data'));
		} else {
			return redirect()->route('front.signin')->with('error', 'Please login first');
		}
	}

	public function pledge_insert(Request $request)
	{
		if (Auth::guard('web')->check()) {
			$user_id = Auth::guard('web')->user()->id;
			if ($request->post('income') !== NULL) {
				$wallet_control = new Wallet_control;
				$wallet_control->user_id = $user_id;
				$wallet_control->wallet_action = 1;
				$wallet_control->date = 180;
				$wallet_control->income = 1.3;
				$id = 0;
				if ($wallet_control->save()) {
					$id = $wallet_control->id;
					$created_at = $wallet_control->created_at;
					Wallet::where('created_at', '<=', $created_at)->where('wallet_cnt_id', 0)->update(['wallet_cnt_id' => $id]);
				}
			}
			return $this->pledge($request);
		} else {
			return redirect()->route('front.signin')->with('error', 'Please login first');
		}
	}

	public function non_pledge(Request $request)
	{
		if (Auth::guard('web')->check()) {
			// $wallet=Wallet::where('email',$request->email)->first();
			$user_id = Auth::guard('web')->user()->id;
			$data['wallet_balance'] = Wallet::getWallet($user_id);
			$data['is_start'] = Wallet::getWallet($user_id) > 20 ? 1 : 0;
			$data['non_pledge'] = Wallet::getNonPledge($user_id);

			$data['wallet_control'] = DB::table('wallet_control')->where('user_id', $user_id)->where('wallet_action', 2)->orderBy('created_at')->first();

			$dt = Wallet::getIncome($user_id, $data['non_pledge']);
			$data['wallet_balance'] += $dt['total_income'];
			$data['wallet_balance'] = number_format($data['wallet_balance'], 3, '.', ',');
			$data['today_income'] = number_format($dt['today_income'], 3, '.', ',');
			$data['total_income'] = number_format($dt['total_income'], 3, '.', ',');
			$data['month_income'] = number_format($dt['month_income'], 3, '.', ',');
			$data['income'] = number_format($dt['income'], 3, '.', ',');
			return view('frontend.wallet.non_pledge', compact('data'));
		} else {
			return redirect()->route('front.signin')->with('error', 'Please login first');
		}
	}

	public function non_pledge_insert(Request $request)
	{
		if (Auth::guard('web')->check()) {
			$user_id = Auth::guard('web')->user()->id;
			if ($request->post('income') !== NULL) {
				$wallet_control = new Wallet_control;
				$wallet_control->user_id = $user_id;
				$wallet_control->wallet_action = 2;
				$wallet_control->date = 90;
				$wallet_control->income = 0.9;
				$id = 0;
				if ($wallet_control->save()) {
					$id = $wallet_control->id;
					$created_at = $wallet_control->created_at;
					Wallet::where('created_at', '<=', $created_at)->where('wallet_cnt_id', 0)->update(['wallet_cnt_id' => $id]);
				}
			}
			return $this->non_pledge($request);
		} else {
			return redirect()->route('front.signin')->with('error', 'Please login first');
		}
	}

	public function record(Request $request)
	{
		if (Auth::guard('web')->check()) {
			$user_id = Auth::guard('web')->user()->id;

			$profits['pledge'] = Wallet::getPledge($user_id);
			$profits['non_pledge'] = Wallet::getNonPledge($user_id);
			$data = Wallet::where('user_id', $user_id)->orderbyDesc('id')->get();
			$length = count($data);
			$now = strtotime(date('Y-m-d H:i:s'));
			foreach ($profits as $profit) {
				foreach ($profit as $item) {
					$income = Wallet::where('user_id', $user_id)->where('wallet_cnt_id', $item->id)->sum('amount');
					$income = $income * $item->income / 100 / 24;
					if ($income == 0)
						continue;
					$start_date = strtotime($item->created_at);
					$last_date = strtotime('+' . $item->date . ' day', strtotime($item->created_at));
					if ($last_date > $now) {
						$last_date = $now;
					}
					for ($i = 1; $i < ($last_date - $start_date) / (60 * 60); $i++) {
						$income_record = clone $data[0];
						$income_record->kind = $item->wallet_action;
						$income_record->amount = number_format($income, 3, '.', '');
						$income_record->kind = $item->wallet_action;
						$income_record->created_at = date('Y-m-d H:i:s', strtotime('+' . $i . ' hour', $start_date));
						$data[$length++] = $income_record;
					}
				}
			}
			for ($i = 0; $i < count($data); $i++) {
				for ($j = 0; $j < count($data); $j++) {
					if (strtotime($data[$i]->created_at) > strtotime($data[$j]->created_at)) {
						$temp = clone $data[$i];
						$data[$i] = clone $data[$j];
						$data[$j] = $temp;
					}
				}
			}

			return view('frontend.wallet.record', compact('data'));
		} else {
			return redirect()->route('front.signin')->with('error', 'Please login first');
		}
	}

	public function finance_record(Request $request)
	{
		if (Auth::guard('web')->check()) {
			$user_id = Auth::guard('web')->user()->id;

			$wallet_control = Wallet_control::where('user_id', $user_id)->where('wallet_action', '< ', 3)->get();

			$data = Wallet_control::query()
				->leftJoin('wallet', 'wallet.wallet_cnt_id', '=', 'wallet_control.id')
				->select('wallet_control.id as id', 'wallet_action', 'date', 'income', 'wallet_control.created_at as created_at', 'wallet_control.updated_at')
				->distinct()
				->where('wallet_control.user_id', $user_id)
				->selectRaw('sum(amount) as amount')
				->groupby('wallet_control.id')
				->orderbyDesc('id')
				->get();
			return view('frontend.account.finance_record', compact('data'));
		} else {
			return redirect()->route('front.signin')->with('error', 'Please login first');
		}
	}
}