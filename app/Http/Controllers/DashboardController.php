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
        $paketSoal = PaketSoal::orderBy('created_at', 'DESC')->get();
        return view('dashboard.paket-soal.index', compact('paketSoal'));
    }
    function paketSoalSaya($id)
    {
        $transaksi = Transaksi::with('paketSoal')->where('user_id', $id)->first();
        if($transaksi != null){
            return view('dashboard.paket-soal.saya', compact('transaksi'));
        }else{
            return view('dashboard.paket-soal.404');
        }

    }
    function detailPaketSoal($id)
    {
        $paketSoal = PaketSoal::where('paket_soal_id', $id)->first();
        return view('dashboard.paket-soal.detail', compact('paketSoal'));
    }
    function bayarPaketSoal($id){
        $paketSoal = PaketSoal::where('paket_soal_id', $id)->first();
        return view('dashboard.paket-soal.bayar', compact('paketSoal', 'id'));
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

        if(isset($batch[0])){
            return view('dashboard.batch-ujian.index', compact('batch'));
        }else{
            return view('dashboard.batch-ujian.404');
        }

    }
    function detailBatch($id){
        $batch = BatchUjian::with('transaksi')->where('batch_id', $id)->first();
        // dd($batch->siswa);

        return view('dashboard.batch-ujian.detail', compact('batch'));
    }
    function tambahBatch(){
        $transaksi = Transaksi::with('paketSoal')->where('user_id', Auth::user()->user_id)->whereNotNull('tgl_bayar')->get();
        // dd($transaksi);
        if(isset($transaksi[0])){
            return view('dashboard.batch-ujian.tambah', compact('transaksi'));
        }else{
            return view('dashboard.paket-soal.404');
        }
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
