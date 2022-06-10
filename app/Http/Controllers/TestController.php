<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\PaketSoal;
use App\Models\Transaksi;
use App\Models\BatchUjian;
use App\Models\JawabanSiswa;

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
        $batch = BatchUjian::select("waktu_pelaksanaan")->where('batch_id', $siswa[0]['batch_id'])->first();
        // dd($guru);

        return view('home.test.detail', compact('siswa', 'guru', 'paketSoal', 'batch'));
    }

    function mulaiTest(Request $request, $id){
        session(['id' => $id]);
        $data = $request->session()->get('siswa');
        $batch = BatchUjian::select("waktu_pelaksanaan")->where('batch_id', $data[0]['batch_id'])->first();
        $paketSoal = PaketSoal::where('paket_soal_id', $data[0]['paket_soal_id'])->first();

        // START RANDOMIZE SOAL
        $random_soal = $paketSoal->soal;
        // $soal_awal = array($random_soal);
        shuffle($random_soal);

        for($i = 0, $iMax = count($random_soal); $i < $iMax; $i++){
            for($n = 0, $nMax = count($random_soal[$i]['jawaban']); $n < $nMax; $n++){
                shuffle($random_soal[$n]['jawaban']);
            }
        }

        // SOLVED: Agar soal tidak terandom terus ketika siswa klik lanjut, maka soal dimasukan ke session
        // Jadi setelah siswa selesai mengerjakan soal, session soal akan dihapus
        // $request->session()->forget('soal');
        $soal_session = $request->session()->get('soal');
        if(!isset($soal_session)){
            session(['soal' => $random_soal]);
        }

        // Pembanding soal randomize dengan soal awal
        // dd($random_soal[0]['pertanyaan'].' = '.$random_soal[0]['jawaban'][0]['key_pilgan_id'].'|'.$random_soal[0]['jawaban'][1]['key_pilgan_id']
        //     .' = '.
        //     $soal_awal[0][0]['pertanyaan'].' = '.$soal_awal[0][0]['jawaban'][0]['key_pilgan_id'].'|'.$soal_awal[0][0]['jawaban'][1]['key_pilgan_id']);
        // END RANDOMIZE SOAL

        $waktu_awal_str = now("Asia/Jakarta")->toTimeString(); // 11.30
        $waktu_awal = strtotime(now("Asia/Jakarta")->toTimeString()); // 11.30

        $paketSoal2 = $paketSoal->waktu_pengerjaan;
        $paketSoal2 .= ":00";
        $waktu_akhir = strtotime($paketSoal2); // 02:30:00

        $countdown = date('h:i:s', $waktu_awal+$waktu_akhir);
        session([
            'waktu_test' => [
                'waktu_mulai_siswa' => $waktu_awal_str,
                'waktu_selesai' => $countdown
            ]
        ]);
        // dd($random_soal);

        // LOGIKA COUNTDOWN NYA YAITU, WAKTU SAAT USER CLICK MULAI TES, DITAMBAHKAN WAKTU PENGERJAAN
        // CONTOH: WAKTU KLIK MULAI TEST = 09:00:00, BATAS WAKTU PENGERJAAN PAKET SOAL = 02:30:00, Maka WAKTU COUNTDOWN = 11:30:00
        // LALU WAKTU COUNTDOWN - WAKTU MULAI TEST (STATIS SESUAI USER CLICK)
        // dd(date('h:i:s', strtotime($countdown)-$waktu_awal));

        // dd($waktu_awal_str.' + '.$paketSoal2.' = '.$countdown.' | Waktu klik: '.$waktu_awal_str.' batas mengerjakan: '.$countdown);
        // $request->session()->forget('jawaban_siswa');
        if($request['pilihan']){
            session()->push('jawaban_siswa' ,[
                'soal_pg_id' => $request['soal_pg_id'],
                'pertanyaan' => $request['pertanyaan'],
                'jawaban' => [
                    'pilihan' => $request['pilihan'],
                    'value_pilihan' => $request['value_pilihan'],
                ]
            ]);
        }

        $jawaban_siswa = $request->session()->get('jawaban_siswa');
        $poin = 0;
        if(isset($jawaban_siswa)){
            foreach($jawaban_siswa as $siswa){
                $poin += $siswa['jawaban']['value_pilihan'];
            }
        }
        session(['point' => $poin]);

        return view('home.test.mulai', compact('random_soal', 'id'));
    }

    function selesaiTest(Request $request){
        $jawaban = $request->session()->get('jawaban_siswa');
        $poin = $request->session()->get('poin');
//        JawabanSiswa::create([
//            "batch_id" => $request->session()->get('id'),
//            "paket_soal_id" => 1,
//            "jawaban" => $jawaban,
//            "result" => $poin,
//        ]);
    }

    function hapus_session_jawaban_siswa(Request $request){
        $request->session()->forget('jawaban_siswa');
        return redirect()->route('test-mulai', 1);
    }
}
