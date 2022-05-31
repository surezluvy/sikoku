<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\PaketSoal;

class HomeController extends Controller
{
    function index()
    {
        return view('home.landing');
    }

    // Home
    function home(){
        return view('home.index');
    }

    // Profil
    function profil()
    {
        return view('home.profil.index');
    }
    function profilEdit()
    {
        return view('home.profil.edit');
    }

    // Paket Soal
    function paketsoal()
    {
        $paketsoal = PaketSoal::all();
        return view('home.paketsoal.index', compact('paketsoal'));
    }
    function detailPaket($id)
    {
        $paketsoal = PaketSoal::where('id', $id)->first();
        return view('home.paketsoal.detail', compact('paketsoal'));
    }
}
