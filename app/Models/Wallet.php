<?php

namespace App\Models;

use App\Models\Wallet_control;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Wallet extends Model
{
    use HasFactory;

    protected $table = 'wallet';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public static function getWallet($user_id)
    {
        $amount = Wallet::where('user_id', $user_id)->where('wallet_cnt_id', 0)->sum('amount');
        return $amount;
    }

    public static function getPledge($user_id)
    {
        $now = date('Y-m-d H:i:s');
        $start_date = date('Y-m-d H:i:s', strtotime('-180 day', strtotime($now)));
        $wallet_control = Wallet_control::where('user_id', $user_id)->where('wallet_action', 1)->orderbyDesc('id')->get();
        // ->where('created_at', '>=', $start_date)
        return $wallet_control;
    }

    public static function getNonPledge($user_id)
    {
        $now = date('Y-m-d H:i:s');
        $start_date = date('Y-m-d H:i:s', strtotime('-90 day', strtotime($now)));
        $wallet_control = Wallet_control::where('user_id', $user_id)->where('wallet_action', 2)->orderbyDesc('id')->get();
        // ->where('created_at', '>=', $start_date)
        return $wallet_control;
    }

    public static function getIncome($user_id, $data)
    {
        $income = 0;
        $dt['today_income'] = 0;
        $dt['month_income'] = 0;
        $dt['total_income'] = 0;
        $dt['income'] = 0;
        foreach ($data as $item) {
            $now = strtotime(date('Y-m-d H:i:s'));  // current time
            $now1 = strtotime(date('Y-m-d 23:59:59'));  // current time
            $last_date = strtotime('+' . $item->date . ' day', strtotime($item->created_at));
            if ($last_date < $now1) {
                $now1 = $last_date;
                $now = $last_date;
            }
            $start = strtotime($item->created_at);
            $time = date('H:i:s', strtotime($item->created_at));  // time of created_at(pledge)
            $month = strtotime(date('Y-m-1 00:00:00'));  // a month income  . $time
            if ($month < $start)
                $month = $start;
            $times = (($now - $start) % (3600 * 24)) / (3600 * 24);
            $total_times = ($now - $start) / 3600 / 24;
            $month_times = ($now - $month) / 3600 / 24;
            $income = Wallet::where('user_id', $user_id)->where('wallet_cnt_id', $item->id)->sum('amount') * $item->income / 100;
            $dt['today_income'] += $income * $times * 1;
            $dt['month_income'] += $income * $month_times * 1;
            $dt['total_income'] += $income * $total_times * 1;
            $dt['income'] += $income;
        }
        return $dt;
    }
}
