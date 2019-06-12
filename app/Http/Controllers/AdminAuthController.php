<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function index()
    {
        Auth::logout();
        return view('Admin.login');
    }

    public function check(Request $request)
    {
        $credentials = $request->only('nick', 'password');

        if (Auth::attempt($credentials)) {

//            kullanıcı aktif mi kontrol ediyoruz
            if (Auth::user()->isActive == 1) {
                // Authentication passed...
                return redirect()->intended('/admin/home');
            }

            $this->index();

        }

        $request->session()->flash('error', 'Kullanıcı adınız ya da şifreniz yanlış!');
        return redirect()->route('login');
    }

    public function logout()
    {
        return $this->index();
    }

}
