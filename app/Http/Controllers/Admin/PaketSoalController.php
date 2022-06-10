<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BatchUjian;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\SoalPilgan;
use App\Models\Soal2d;
use App\Models\Key2d;
use App\Models\KeyPilgan;
use App\Models\PaketSoal;

class PaketSoalController extends Controller
{
    function index(){
        $paketSoal = PaketSoal::all();
        // foreach($paketSoal as $paket){
        //     foreach($paket->soal as $soal){
        //         dd($soal);
        //     }
        // }
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
        return view('admin.paket-soal.index', compact('paketSoal'));
    }
    function tambahPaketSoal(){
        $no = 1;
        $soalPilgan = SoalPilgan::all();
        $soal2d = Soal2d::all();
        return view('admin.paket-soal.tambah', compact('soalPilgan', 'soal2d', 'no'));
    }
    function prosesTambahPaketSoal(Request $request){
        $paketSoal = array();
        $keyPilganPilihan = array();
        $key2dPilihan = array();
        foreach($request->soalPilgan as $soalPilgan){
            $soalPilganPilihan = SoalPilgan::with('key')->where('soal_pg_id', $soalPilgan)->first();
            foreach($soalPilganPilihan->key as $key){
                array_push($keyPilganPilihan, ["key_pilgan_id" => $key->key_pilgan_id, "pilihan" => "$key->pilihan", "value_pilihan" => $key->value_pilihan]);
            }
            array_push($paketSoal,
                [
                    "soal_pg_id" => $soalPilgan,
                    "pertanyaan" => "$soalPilganPilihan->pertanyaan",
                    "jawaban" => $keyPilganPilihan
                ]);
        }
        foreach($request->soal2d as $soal2d){
            $soal2dPilihan = Soal2d::with('key')->where('soal_2d_id', $soal2d)->first();
            foreach($soal2dPilihan->key as $key){
                array_push($key2dPilihan, ["key_2d_id" => $key->key_2d_id, "pilihan" => "$key->pilihan", "value_pilihan" => $key->value_pilihan]);
            }
            array_push($paketSoal,
                [
                    "soal_2d_id" => $soal2d,
                    "pertanyaan" => "$soal2dPilihan->pertanyaan",
                    "jawaban" => $key2dPilihan
                ]);
        }
        PaketSoal::create([
            'nama_paket' => $request->nama_paket,
            'waktu_pengerjaan' => $request->waktu_pengerjaan,
            'soal' => $paketSoal,
        ]);
        return redirect()->route('admin-paketSoal');
    }
    function ubahPaketSoal($id){
        $paketSoal = PaketSoal::find($id)->first();
        return view('admin.paket-soal.ubah', compact('paketSoal'));
    }
    function prosesUbahPaketSoal(Request $request, $id){
        $validateData = $request->validate([
            'nama_paket' => 'required',
        ]);

        PaketSoal::find($id)->update($validateData);
        return redirect()->route('admin-paketSoal');
    }
    function hapusPaketSoal($id){
        PaketSoal::find($id)->delete();
        return redirect()->route('admin-paketSoal');
    }
}
