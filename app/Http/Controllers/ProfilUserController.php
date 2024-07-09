<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilUserController extends Controller
{
    // public function profil(Request $request){
    //     // dd('ini halaman profil');
    //     $request->session()->flush();
    // }

    public function index(){
        return view('/User/akun.profile');
    }
}
