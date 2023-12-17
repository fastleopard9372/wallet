<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Validator;
use App\Models\backend\Deposit;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
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

    public function transactionApproval(){
      
        $data = DB::table('deposits')
        ->join('users', 'deposits.user_id', '=', 'users.id')
        ->select('deposits.*', 'users.user_name as user_name')
        ->get();
        //  dd($data);
        return view('backend.users.transactionApproval', compact('data'));  
    }
    public function walletRecharge(Request $request){
        $data = DB::table('deposits')
        ->join('users', 'deposits.user_id', '=', 'users.id')
        ->select('deposits.*', 'users.user_name as user_name')
        ->where('status','approved')
        ->get();
        // dd($data);
        return view('backend.users.walletRecharge', compact('data'));  
    }
    public function walletRechargeManuly(Request $request){
        $data = DB::table('deposits')
        ->join('users', 'deposits.user_id', '=', 'users.id')
        ->select('deposits.*', 'users.user_name as user_name')
        ->where('status','approved')
        ->get();
        // dd($data);
        return view('backend.users.walletRechargeManuly', compact('data'));  
    }
    public function rechargeUpdate(Request $request){
        // dd($request->all());
        $id =$request->post('user_id');
       
        $model = Deposit::findOrFail($id);
        $model->manual_amount_reacharge_by_admin = $request->post('amount');
        $model->amount_reacharge_date =  Carbon::now();
        $model->save();
        // dd($model);
        
        $data = DB::table('deposits')
        ->join('users', 'deposits.user_id', '=', 'users.id')
        ->select('deposits.*', 'users.user_name as user_name')
        ->where('status','approved')
        ->get();
        // dd($data);
        return view('backend.users.walletRecharge', compact('data'));
    }
    
    public function statusAction(Request $request)
    {
       
        $id =$request->post('id');
      
        $model = Deposit::find($id);
       
        if( $model->status == 0){
            $model->update(['status' => 1]);
            return response()->json(["message" => "Approve",'code' => 404]);
        }elseif($model->status == 1){
            $model->update(['status' => 0]);
            return response()->json(["message" => "Pending ",'code' => 200]);
        }

    }
}
