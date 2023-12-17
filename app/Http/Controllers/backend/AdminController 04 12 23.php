<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //Display Login Page
    public function login(Request $request){

        if(auth()->guard('admin')->check()){
            return redirect()->route('admin.dashboard');
        }

        if ($request->isMethod('post')) {
            $validator =  Validator::make($request->all(),[
                'email'=>'required|email',
                'password'=>'required'
            ]);
            if($validator->fails()){
                return redirect()->back()->withErrors($validator->errors())->withInput(); 
            }else{
                $check = $request->all();
                if(Auth::guard('admin')->attempt(['email'=>$check['email'],'password'=>$check['password'] ])) {
                    return redirect()->route('admin.dashboard')->with('success','Logged In Successfully');
                }else{
                    return back()->with('error','Invalid Credintails');
                }
            }
        }else{
            return view('backend.login');
        }

    }

    //Dashboard
    public function dashboard(){
        return view('backend.dashboard.index');
    }

    //Logout Admin
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('success','Log out Successfully');
    }
}
