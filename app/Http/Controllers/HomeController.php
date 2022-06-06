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
        return view('home.index');
    }


    // Paket Soal
    function paketsoal()
    {
        $paketSoal = PaketSoal::all();
        return view('home.paketsoal.index', compact('paketSoal'));
    }
    function detailPaketSoal($id)
    {
        $paketsoal = PaketSoal::where('paket_soal_id', $id)->first();
        return view('home.paketsoal.detail', compact('paketsoal'));
    }
    function pilihPaketSoal($id)
    {
        if(Auth::user()){
            $paketsoal = PaketSoal::where('paket_soal_id', $id)->first();
            return view('dashboard.index', compact('paketsoal'));
        }else{
            return redirect('/masuk');
        }
    }
    function import(){
        return view('dashboard.import');
    }
}
