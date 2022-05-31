<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    function index()
    {
        return view('admin.index');
    }

    // AUTH
    function login(){
        return view('admin.auth.login');
    }
    function loginProcess(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:8',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }

        return back()->with('error', 'Login gagal! Silahkan perbaiki data anda');
    }

    function register(){
        return view('admin.auth.register');
    }
    function registerProcess(Request $request){
        $validateData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8'
        ]);

        $validateData['password'] = bcrypt($validateData['password']);
        User::create($validateData);

        return redirect('admin/login')->with('success', 'Berhasil mendaftar! Silahkan masuk');
    }

    function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('admin/login')->with('success', 'Berhasil logout.');
    }
}
