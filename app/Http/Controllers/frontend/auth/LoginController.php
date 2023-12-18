<?php

namespace App\Http\Controllers\frontend\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function signin()
    {
        if (auth()->guard('web')->check()) {
            return redirect()->intended('/');  // Redirect to the previous page or a default page if no intended destination is available
        } else {
            return view('frontend.auth.signin');
        }
    }

    public function login(Request $request)
    {
        $validateData = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $Users = User::where('email', $request->email)->first();

        if (isset($Users)) {
            $check = $request->all();
            if (Auth::guard('web')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
                return redirect()->route('front.wallet_index')->with('success', 'login successfully');
            } else {
                return back()->with('error', 'Invalid Credintails');
            }
        } else {
            return back()->with('error', 'Please Contact with  Team');
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        return redirect()->route('home')->with('success', 'Successfully logout');
    }
}
