<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\PaketSoal;

class DashboardController extends Controller
{
    function index()
    {
        return view('dashboard.index');
    }
    function paketSoal()
    {
        $paketsoal = PaketSoal::all();
        return view('dashboard.paketsoal', compact('paketsoal'));
    }
    function detailPaketSoal($id)
    {
        $paketsoal = PaketSoal::where('paket_soal_id', $id)->first();
        return view('dashboard.detail', compact('paketsoal'));
    }
}
