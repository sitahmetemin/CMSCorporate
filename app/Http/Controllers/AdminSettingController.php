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
        //
    }

    public function updateSocial(Request $request)
    {
        //
    }

    public function updateContact(Request $request)
    {
        //
    }

}
