<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Banners;

class HomeController extends Controller
{
    //Home Page
    public function index(Request $request){
        // echo "Front end";
        // $banners = Banners::where('status',1)->get();
        return view('frontend.home');
    }
    public function project(Request $request){
        
        return view('frontend.projects.project_index');
    }
    public function startfrom(Request $request){
        
        return view('frontend.projects.startfrom');
    }
    public function nft(Request $request){
        
        return view('frontend.projects.nft');
    }
    public function mining(Request $request){
        
        return view('frontend.projects.mining');
    }
    public function insured(Request $request){
        
        return view('frontend.projects.insured');
    }
    public function highratings(Request $request){
        
        return view('frontend.projects.highratings');
    }
    public function freeearnings(Request $request){
        
        return view('frontend.projects.freeearnings');
    }
    public function detail_rec(Request $request){
        
        return view('frontend.projects.detail_rec');
    }
    public function aibot(Request $request){
        
        return view('frontend.projects.aibot');
    }

    /**--------------Wallet -------------- */
    public function wallet(Request $request){
        return view('frontend.wallet.wallet_index');
    }
    
    public function record(Request $request){
        
        return view('frontend.wallet.record');
    }
    public function out(Request $request){
        
        return view('frontend.wallet.out');
    }
    public function in(Request $request){
        
        return view('frontend.wallet.in');
    }
    public function pledge(Request $request){
        
        return view('frontend.wallet.pledge');
    }
    public function non_pledge(Request $request){
        
        return view('frontend.wallet.non_pledge');
    }
    public function incentive(Request $request){
        
        return view('frontend.wallet.incentive');
    }
    
    public function insurance(Request $request){
        
        return view('frontend.insurance.insurance_index');
    }
    
    public function accounts(Request $request){
        
        return view('frontend.account.account_index');
    }
    public function about_us(Request $request){
        
        return view('frontend.account.about_us');
    }
    public function bankcard(Request $request){
        
        return view('frontend.account.bankcard');
    }
    public function change_login_password(Request $request){
        
        return view('frontend.account.change_login_password');
    }
    public function signin(Request $request){
        
        return view('frontend.auth.signin');
    }
    public function signup(Request $request){
        
        return view('frontend.auth.signup');
    }
}
