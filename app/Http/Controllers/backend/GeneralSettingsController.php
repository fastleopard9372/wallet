<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\backend\GeneralSettings;
use Illuminate\Http\Request;
use Carbon\Carbon;

class GeneralSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $generalSetting=GeneralSettings::find(1);

        return view('backend.general-settings.general-settings',compact('generalSetting'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $updatedRows = GeneralSettings::where('id', 1)->update([
            'site_title'=>$request->site_title,
            'company_name'=>$request->company_name,
            'site_email'=>$request->site_email,
            'meta_site_title'=>$request->meta_site_title,
            'meta_description'=>$request->meta_description,
            'meta_keywords'=>$request->meta_keywords,
        ]);

        if ($updatedRows > 0) {
           
            return redirect()->route('admin.general.settings')->with('success', 'Data updated successfully');
        } else {
           
            return redirect()->route('admin.general.settings')->with('error', 'Update failed');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(GeneralSettings $generalSettings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GeneralSettings $generalSettings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GeneralSettings $generalSettings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GeneralSettings $generalSettings)
    {
        //
    }
}
