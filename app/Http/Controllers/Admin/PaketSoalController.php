<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\SoalImport;
use App\Models\BatchUjian;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\SoalPilgan;
use App\Models\Soal2d;
use App\Models\Key2d;
use App\Models\KeyPilgan;
use App\Models\PaketSoal;
use Maatwebsite\Excel\Facades\Excel;

class PaketSoalController extends Controller
{
    function index(){
        $paketSoal = PaketSoal::with('userAdd')->get();
        return view('admin.paket-soal.index', compact('paketSoal'));
    }
    function detail($id){
        $paketSoal = PaketSoal::where('paket_soal_id', $id)->first();
        return view('admin.paket-soal.detail', compact('paketSoal'));
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
        
        if(isset($request->soalPilgan)){
            foreach($request->soalPilgan as $soalPilgan){
                $soalPilganPilihan = SoalPilgan::with('key')->where('soal_pg_id', $soalPilgan)->first();
                foreach($soalPilganPilihan->key as $key){
                    array_push($keyPilganPilihan, ["key_pilgan_id" => $key->key_pilgan_id, "pilihan" => "$key->pilihan", "value_pilihan" => $key->value_pilihan]);
                }
                array_push($paketSoal,
                    [
                        "soal_pg_id" => $soalPilgan,
                        "tipe_soal" => "pilgan",
                        "pertanyaan" => "$soalPilganPilihan->pertanyaan",
                        "jawaban" => $keyPilganPilihan
                    ]);
                $keyPilganPilihan = array();
            }
        }
        if(isset($request->soal2d)){
            foreach($request->soal2d as $soal2d){
                $soal2dPilihan = Soal2d::with('key')->where('soal_2d_id', $soal2d)->first();
                foreach($soal2dPilihan->key as $key){
                    array_push($key2dPilihan, ["key_2d_id" => $key->key_2d_id, "pilihan" => "$key->pilihan", "value_pilihan" => $key->value_pilihan]);
                }
                array_push($paketSoal,
                    [
                        "soal_2d_id" => $soal2d,
                        "tipe_soal" => "2d",
                        "pertanyaan" => "$soal2dPilihan->pertanyaan",
                        "jawaban" => $key2dPilihan
                    ]);
                $key2dPilihan = array();
            }
        }
        PaketSoal::create([
            'nama_paket' => $request->nama_paket,
            'waktu_pengerjaan' => $request->waktu_pengerjaan,
            'user_add' => auth()->user()->user_id,
            'harga' => $request->harga,
            'soal' => $paketSoal,
        ]);
        return redirect()->route('admin-paketSoal');
    }
    function ubahPaketSoal($id){
        $paketSoal = PaketSoal::where('paket_soal_id', $id)->first();
        $soalPilgan = SoalPilgan::all();
        $soal2d = Soal2d::all();
        return view('admin.paket-soal.ubah', compact('paketSoal', 'soalPilgan', 'soal2d'));
    }
    function prosesUbahPaketSoal(Request $request, $id){
        $validateData = $request->validate([
            'nama_paket' => 'required',
            'waktu_pengerjaan' => 'required',
        ]);

        $paketSoal = array();
        $keyPilganPilihan = array();
        $key2dPilihan = array();
        if(isset($request->soalPilgan)){
            foreach($request->soalPilgan as $soalPilgan){
                $soalPilganPilihan = SoalPilgan::with('key')->where('soal_pg_id', $soalPilgan)->first();    
                foreach($soalPilganPilihan->key as $key){
                    array_push($keyPilganPilihan, ["key_pilgan_id" => $key->key_pilgan_id, "pilihan" => "$key->pilihan", "value_pilihan" => $key->value_pilihan]);
                }
                array_push($paketSoal,
                    [
                        "soal_pg_id" => $soalPilgan,
                        "tipe_soal" => "pilgan",
                        "pertanyaan" => "$soalPilganPilihan->pertanyaan",
                        "jawaban" => $keyPilganPilihan
                    ]);
                $keyPilganPilihan = array();
            }
        }
        if(isset($request->soal2d)){
            foreach($request->soal2d as $soal2d){
                $soal2dPilihan = Soal2d::with('key')->where('soal_2d_id', $soal2d)->first();
                foreach($soal2dPilihan->key as $key){
                    array_push($key2dPilihan, ["key_2d_id" => $key->key_2d_id, "pilihan" => "$key->pilihan", "value_pilihan" => $key->value_pilihan]);
                }
                array_push($paketSoal,
                    [
                        "soal_2d_id" => $soal2d,
                        "tipe_soal" => "2d",
                        "pertanyaan" => "$soal2dPilihan->pertanyaan",
                        "jawaban" => $key2dPilihan
                    ]);
                $key2dPilihan = array();
            }
        }

        PaketSoal::where('paket_soal_id', $id)->update([
            'nama_paket' => $validateData['nama_paket'],
            'waktu_pengerjaan' => $validateData['waktu_pengerjaan'],
            'user_add' => auth()->user()->user_id,
            'harga' => $request->harga,
            'soal' => $paketSoal,
        ]);
        return redirect()->route('admin-paketSoal');
    }
    function hapusPaketSoal($id){
        PaketSoal::find($id)->delete();
        return redirect()->route('admin-paketSoal');
    }
}
