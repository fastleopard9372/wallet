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
