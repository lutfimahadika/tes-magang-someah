<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{

    public function index1()
    {
        return view('userlist');
    }
    public function login(){
        return view('login');
    } 
    public function loginproses(Request $request){
        $infologin = [
            'username' => $request->username,
            'password' => $request->password
        ];
        if (Auth::attempt($infologin)){
            return redirect ('/tasks')->with('Selamat datang', 'username');
        } else {
            return redirect ('/login')->with('Username atau Password salah');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
