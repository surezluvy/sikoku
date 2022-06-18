<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    function index()
    {
        return view('home.index');
    }

    // AUTH
    function masuk(){
        return view('home.auth.login');
    }
    function prosesMasuk(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:8',
        ]);

        $userLogged = User::where('email', $credentials['email'])->first();

        if (Auth::attempt($credentials)) {
            if($userLogged->role == 'admin' || $userLogged->role == 'psikolog'){
                $request->session()->regenerate();
                return redirect()->route('admin');
            }else if($userLogged->role == 'guru' || $userLogged->role == 'siswa'){
                $request->session()->regenerate();
                return redirect()->route('dashboard');
            }
        }

        return back()->with('error', 'Login gagal! Silahkan perbaiki data anda');
    }

    function daftar(){
        return view('home.auth.register');
    }
    function prosesDaftar(Request $request){
        $validateData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8'
        ]);

        $validateData['role'] = 'guru';
        $validateData['password'] = bcrypt($validateData['password']);

        $daftar = User::create($validateData);
        if($daftar){
            return redirect('masuk')->with('success', 'Berhasil mendaftar! Silahkan masuk');
        }

    }

    function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Berhasil logout.');
    }

    function login(){
        return view('login');
    }

    function prosesLogin(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
        return back()->with('error', 'Login gagal! Silahkan perbaiki data anda');
    }
}
