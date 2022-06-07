<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\PaketSoal;
use App\Models\Transaksi;
use App\Models\BatchUjian;

class TestController extends Controller
{
    function index(){
        return view('home.test.index');
    }
    function inputToken(Request $request){
        // SOLVED: Token masih bisa digunakan sebelum waktu pelaksanaan
        
        $batch = BatchUjian::with('transaksi')->get();
        $siswa = array();

        // BUG: Disini waktu masih menggunakan asia jakarta
        // Jika ingin tes mengubah waktu batchujianfactory
        $now = strtotime(now('Asia/Jakarta')->toDateTimeString());

        foreach($batch as $b){
            foreach($b->siswa as $s){
                if($s['token'] == $request->token){
                    $waktu_pelaksanaan = strtotime($b->waktu_pelaksanaan);

                    if($now >= $waktu_pelaksanaan){
                    
                        array_push($siswa, [
                            "paket_soal_id" => $b->transaksi['paket_soal_id'],
                            "batch_id" => $b->batch_id,
                            "user_id" => $b->transaksi['user_id'],
                            "nama_siswa" => $s['nama_siswa'],
                            "token" => $s['token'],
                            "tanggal_lahir" => $s['tanggal_lahir']
                        ]);

                        session(['siswa' => $siswa]);
                        return redirect()->route('test-validasi')->with(['success' => 'Token berhasil dimasukkan']);
                    }else{
                        return redirect()->route('test')->with(['error' => 'Token dapat digunakan pada '.$b->waktu_pelaksanaan]);
                    }

                }else{
                    return redirect()->route('test')->with(['error' => 'Token yang anda masukkan salah, silahkan hubungi Guru anda']);
                }
            }
        }
    }

    function validasiSiswa(Request $request){
        $data = $request->session()->get('siswa');
        return view('home.test.validasi', compact('data'));
    }

    function detail(Request $request){
        // dd($request->session()->get('siswa'));
        $siswa = $request->session()->get('siswa');
        $guru = User::select("name")->where('user_id', $siswa[0]['user_id'])->first();
        $paketSoal = PaketSoal::select("user_add", "nama_paket", "waktu_pengerjaan")->where('paket_soal_id', $siswa[0]['paket_soal_id'])->first();
        $batch = BatchUjian::select("tanggal_pelaksanaan", "jam_pelaksanaan")->where('batch_id', $siswa[0]['batch_id'])->first();
        // dd($guru);

        return view('home.test.detail', compact('siswa', 'guru', 'paketSoal', 'batch'));
    }

    function mulaiTest(Request $request){
        $data = $request->session()->get('siswa');
        $batch = BatchUjian::select("tanggal_pelaksanaan", "jam_pelaksanaan")->where('batch_id', $data[0]['batch_id'])->first();
        $paketSoal = PaketSoal::select("waktu_pengerjaan")->where('paket_soal_id', $data[0]['paket_soal_id'])->first();

        $waktu_tes_dapat_diakses = strtotime($batch->jam_pelaksanaan);
        $waktu_awal = strtotime(now("Asia/Jakarta")->toTimeString()); // 11.30
        $waktu_akhir = strtotime($paketSoal->waktu_pengerjaan); // 02:30
        
        $countdown = date('h:i:s', $waktu_awal+$waktu_akhir);

        // dd($countdown);
    }
}
