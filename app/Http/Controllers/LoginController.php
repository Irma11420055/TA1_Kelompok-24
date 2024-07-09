<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'no_anggota' => ['required'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)){
            //cek apakah user status = aktif
            if(Auth::user()->status != 'aktif'){
                Session::flash('status', 'failed');
                Session::flash('message', 'Anda sudah bukan anggota aktif lagi!');
                return redirect('/login');
            }
            
            $request->session()->regenerate();
            if(Auth::user()->id_role == 1){
                return redirect('/admin');
            }

            if(Auth::user()->id_role != 1){
                return redirect('/');
            }
        }

        Session::flash('status', 'failed');
        Session::flash('message', 'Login Invalid, username atau password Anda salah.');
        return redirect('/login');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
