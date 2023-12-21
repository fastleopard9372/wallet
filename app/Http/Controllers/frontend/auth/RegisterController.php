<?php

namespace App\Http\Controllers\frontend\auth;

use App\Http\Controllers\Controller;
use App\Models\backend\Qrcode;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function signup()
    {
        if (auth()->guard('web')->check()) {
            return redirect()->intended('/');  // Redirect to the previous page or a default page if no intended destination is available
        } else {
            return view('frontend.auth.signup');
        }
    }

    public function Check_email_username(Request $request)
    {
        if ($request->field == 'username') {
            $isExistUsername = User::where(['user_name' => $request->value])->count();

            if ($isExistUsername === 1) {
                return response()->json(['message' => 'Username already exists', 'status' => 'error', 'field' => 'username']);
            } else {
                return response()->json(['message' => 'Username is available.', 'status' => 'success', 'field' => 'username']);
            }
        }
        if ($request->field == 'email') {
            $isExistEmail = User::where(['email' => $request->value])->count();
            // echo "<pre>";
            // print_r($isExistEmail);
            // die;
            if ($isExistEmail === 1) {
                return response()->json(['message' => 'Email already exists', 'status' => 'error', 'field' => 'email']);
            } else {
                return response()->json(['message' => 'Email is available.', 'status' => 'success', 'field' => 'email']);
            }
        }
    }

    public function register(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        // die;

        $validateData = $request->validate([
            'user_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);
        // $my_referral_code = $request->user_name . '_' . Str::random(2);
        $User = User::create([
            'user_name' => $request->user_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'referred_by' => $request->referred_by,
            'my_referral_code' => $request->user_name,
        ]);
        $lastInsertId = $User->id;
        // // echo "<pre>";
        // // print_r($request->all());
        // echo $lastInsertId;
        $parentChildCount = User::where(['referred_by' => $request->referred_by])->count();
        $qrCode = Qrcode::find($parentChildCount);
        if (isset($qrCode)) {
            $User->update(['qrcode_id' => $parentChildCount]);
        }
        // echo $lastInsertId."<br>";
        // echo $parentChildCount;
        // echo "<pre>";
        // print_r($qrCode);
        // die;
        return redirect()->route('front.signin')->with('success', 'Successfully Register');
    }
}
