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
        // foreach($paketSoal as $paket){
        //     foreach($paket->soal as $soal){
        //         dd($soal['pertanyaan']);
        //         foreach($soal['jawaban'] as $jawaban){
        //             // $jawaban['key_pilgan_id'];
        //             // $jawaban['pilihan'];
        //             // $jawaban['value_pilihan'];
        //             dd($jawaban['pilihan']);
        //         }
        //     }
        // }
        // dd($paketSoal[1]->soal[0]['jawaban'][0]);
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
}
