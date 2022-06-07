<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Imports\SiswaImport;
use Maatwebsite\Excel\Facades\Excel;

use App\Models\User;
use App\Models\PaketSoal;
use App\Models\Transaksi;
use App\Models\BatchUjian;

class DashboardController extends Controller
{
    function index()
    {
        return view('dashboard.index');
    }
    function paketSoal()
    {
        $paketsoal = PaketSoal::all();
        return view('dashboard.paket-soal.index', compact('paketsoal'));
    }
    function detailPaketSoal($id)
    {
        $paketsoal = PaketSoal::where('paket_soal_id', $id)->first();
        return view('dashboard.paket-soal.detail', compact('paketsoal'));
    }
    function bayarPaketSoal($id){
        $paketsoal = PaketSoal::where('paket_soal_id', $id)->first();
        return view('dashboard.paket-soal.bayar', compact('paketsoal', 'id'));
    }
    function prosesBayarPaketSoal(Request $request){
        Transaksi::create([
            'user_id' => $request->user_id,
            'paket_soal_id' => $request->paket_soal_id,
            // Otomatis membayar dengan mengisi tgl_bayar
            'tgl_bayar' => now(),
        ]);

        // cek relasi
        // $trs = Transaksi::with('paketsoal', 'user')->get();
        // dd($trs[0]);

        return redirect()->route('dashboard-batch');
    }
    function batch(){
        $batch = BatchUjian::with('transaksi')->whereHas('transaksi', function ($query) {
            return $query->where('user_id', Auth::user()->user_id);
        })->get();

        return view('dashboard.batch-ujian.index', compact('batch'));
    }
    function tambahBatch(){
        $transaksi = Transaksi::with('paketSoal')->where('user_id', Auth::user()->user_id)->whereNotNull('tgl_bayar')->get();

        return view('dashboard.batch-ujian.tambah', compact('transaksi'));
    }
    public function prosesTambahBatch(Request $request)
    {
        $siswa_excel = Excel::toArray(new SiswaImport, $request->file('siswa'));
        $siswa = array();

        foreach($siswa_excel[0] as $s){
            $randomNumber = random_int(100, 999);
            $token = now()->format('dy').$request->transaksi_id.$randomNumber;
            array_push($siswa, [
                'nama_siswa' => $s['nama'],
                'token' => $token,
                'tanggal_lahir' => $s['tanggal_lahir']
            ]);
        }

        BatchUjian::create([
            'transaksi_id' => $request->transaksi_id,
            'waktu_pelaksanaan' => $request->waktu_pelaksanaan,
            'siswa' => $siswa
        ]);

        return redirect()->route('dashboard-batch');
    }
}
