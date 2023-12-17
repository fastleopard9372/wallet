<?php
namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Qrcode;
use Illuminate\Http\Request;

class QrcodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Qrcode::paginate(10);
        return view("backend.Qrcode.index", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("backend.Qrcode.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd('test');
        if ($request->hasFile("qrcode")) {

            $request->validate([
                'qrcode' => 'required|mimes:jpeg,png,bmp,gif|max:2048',
            ]);
           
    
            $image=$request->file('qrcode');
            // Save the uploaded image file to the public storage directory.
            $imageName = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            
            $image->move(public_path('uploads/images/qrCode'), $imageName);
        }
        if($request->post('record_id')=='')
        {

            
        
            // Create a new instance of the image model and set the `name` and `path` properties to the uploaded image file's name and path, respectively.
            $QrCode = new Qrcode();
            $QrCode->qrcode = $imageName;
            $QrCode->wallet_address = $request->wallet_address;
            // $QrCode->status = $request->status;
            
            // Save the image model to the database.
            $QrCode->save();

            return redirect()->route('admin.qrcode.list')->with('success','Successfully Added'); 
        }else {
           
            
            $model = Qrcode::find($request->post('record_id'));
            $model->wallet_address = $request->wallet_address;
            // $model->status = $request->status;
            
            
            $model->save();



            if ($model->wasChanged()) {
                return redirect()->route('admin.qrcode.list')->with('success','Successfully updated');
            }else{
                return redirect()->route('admin.qrcode.list');
                
            }
        }
    }
    public function wallet_address_unique(Request $request)
    {
        
        if($request->post('id')==''){

           

            
            $is_exist=Qrcode::where('wallet_address',$request->wallet_address)->count();

            if($is_exist>0){

                return response()->json(["message" => "This phone number already exists ",'code' => 404]);

            }else{
                return response()->json(["message" => "OK",'code' => 200]);

            }

        }else{

          $id =$request->post('id');

          $update_is_exist=Qrcode::where('id',$id)->where('wallet_address',$request->wallet_address)->count();

          if($update_is_exist>0)
          {
            return response()->json(["message" => "OK",'code' => 200]);
          }else{

            $is_exist=Qrcode::where('wallet_address',$request->wallet_address)->count();
            if($is_exist>0){

                return response()->json(["message" => "This id already exists ",'code' => 404]);

            }else{
                return response()->json(["message" => "OK",'code' => 200]);

            }

          }
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Qrcode $qrcode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $id= decrypt($id);
        $details=Qrcode::find($id);
        // dd($details);
        return view('backend.Qrcode.create',compact('details'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Qrcode $qrcode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Qrcode $qrcode)
    {
        //
    }
}
