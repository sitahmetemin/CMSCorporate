<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class AdminSettingController extends Controller
{
    public function index()
    {
        return view('Admin.settings', [
        	'setting' => Setting::find(1),
        ]);
    }


    public function updateSite(Request $request)
    {
        try{
            Setting::find(1)->update($request->all());
            return redirect('/admin/settings')->with('status', 'success');

        }catch (\Exception $e){
            return redirect('/admin/settings')->with('status', $e);
        }
    }

    public function updateSocial(Request $request)
    {
        try{
            Setting::find(1)->update($request->all());
            return redirect('/admin/settings')->with('status', 'success');

        }catch (\Exception $e){
            return redirect('/admin/settings')->with('status', $e);
        }
    }

    public function updateContact(Request $request)
    {
        try{
            Setting::find(1)->update($request->all());
            return redirect('/admin/settings')->with('status', 'success');

        }catch (\Exception $e){
            return redirect('/admin/settings')->with('status', $e);
        }
    }

}
