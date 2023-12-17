<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RecordController extends Controller
{
    public function record(Request $request)
    {
        if (Auth::guard('web')->check()) {
            $user_id = Auth::guard('web')->user()->id;
            $data = Wallet::where('user_id', $user_id)->orderbyDesc('id')->get();

            return view('frontend.wallet.record', compact('data'));
        } else {
            return redirect()->route('front.signin')->with('error', 'Please login first');
        }
    }
}
