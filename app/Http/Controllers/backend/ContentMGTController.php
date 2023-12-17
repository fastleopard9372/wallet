<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\backend\ContentMGT;
use Illuminate\Http\Request;

class ContentMGTController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $content= ContentMGT::all();
        return view('backend.content.content-list',compact('content'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.content.create-content');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if ($request->id>0) {

            $updatedRows = ContentMGT::where('id', $request->id)->update([
                'title'=>$request->title,
                'description'=>$request->description,
                'status'=>$request->status,
            ]);
    
            if ($updatedRows > 0) {
               
                return redirect()->route('admin.content.list')->with('success', 'Data updated successfully');
            } else {
               
                return redirect()->route('admin.content.list')->with('error', 'Update failed');
            }
            # code...
        } else {
            
            ContentMGT::create([
                'title'=>$request->title,
                'description'=>$request->description,
                'status'=>$request->status,
    
            ]);

            return redirect()->route('admin.content.list')->with('success', 'Data updated successfully');

        }
        
        


           
       
    }


    public function edit($id)
    {
        $details = ContentMGT::find($id);

        return view('backend.content.create-content',compact('details'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContentMGT $contentMGT)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContentMGT $contentMGT)
    {
        //
    }
}
