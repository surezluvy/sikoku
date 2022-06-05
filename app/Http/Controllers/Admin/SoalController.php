<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SoalPilgan;
use App\Models\Soal2d;
use App\Models\Key2d;
use App\Models\KeyPilgan;

class SoalController extends Controller
{
    function index($tipe){
        if($tipe == 'pilgan'){
            $kumpulan_soal = SoalPilgan::with('key')->get();
            $id = 'soal_pg_id';
            return view('admin.soal.index', compact('kumpulan_soal', 'tipe', 'id'));
        }else if($tipe == '2d'){
            $kumpulan_soal = Soal2d::with('key')->get();
            $id = 'soal_2d_id';
            return view('admin.soal.index', compact('kumpulan_soal', 'tipe', 'id'));
        }
    }
    function tambahSoal($tipe){
        return view('admin.soal.tambah-soal', compact('tipe'));
    }
    function prosesTambahSoal(Request $request){

        $validateData = $request->validate([
            'pertanyaan' => 'required|string|min:5',
            'tipe' => 'required',
        ]);

        if($validateData['tipe'] == 'pilgan'){
            $id = SoalPilgan::insertGetId([
                'pertanyaan' => $validateData['pertanyaan']
            ]);
        }else if($validateData['tipe'] == 'pilgan'){
            $id = Soal2d::insertGetId([
                'pertanyaan' => $validateData['pertanyaan']
            ]);
        }
        $last_id = $id;
        $tipe_soal = $validateData['tipe'];
        return redirect()->route('admin-tambahJawaban', [$last_id, $tipe_soal]);
    }
    function tambahJawaban($last_id, $tipe_soal){
        return view('admin.soal.tambah-jawaban', compact('last_id', 'tipe_soal'));
    }
    function prosesTambahJawaban(Request $request){

        $validateData = $request->validate([
            'pilihan' => 'required|string',
            'value_pilihan' => 'required',
        ]);

        $tipe_soal = $request->tipe_soal;

        if($tipe_soal == 'pilgan'){
            $validateData['soal_pg_id'] = $request->soal_id;
            KeyPilgan::create($validateData);
        }else if($tipe == '2d'){
            $validateData['soal_2d_id'] = $request->soal_id;
            Key2d::create($validateData);
        }
        return redirect()->route('admin-soal', $tipe_soal);
    }
    function ubahSoal($id, $tipe){
        if($tipe == 'pilgan'){
            $soal = SoalPilgan::where('soal_pg_id', $id)->first();
            return view('admin.soal.ubah-soal', compact('soal', 'tipe', 'id'));
        }else if($tipe == '2d'){
            $soal = Soal2d::where('soal_2d_id', $id)->first();
            return view('admin.soal.ubah-soal', compact('soal', 'tipe', 'id'));
        }
    }
    function prosesUbahSoal(Request $request){
        $validateData = $request->validate([
            'pertanyaan' => 'required|string|min:5',
            'tipe' => 'required',
        ]);
        if($validateData['tipe'] == 'pilgan'){
            SoalPilgan::findOrFail($request->id)->update([
                'pertanyaan' => $validateData['pertanyaan'],
            ]);
        }else if($validateData['tipe'] == 'pilgan'){
            Soal2d::findOrFail($request->id)->update([
                'pertanyaan' => $validateData['pertanyaan'],
            ]);
        }
        $last_id = $request->id;
        $tipe_soal = $validateData['tipe'];
        return redirect()->route('admin-ubahJawaban', [$last_id, $tipe_soal]);
    }
    function ubahJawaban($last_id, $tipe_soal){
        if($tipe_soal == 'pilgan'){
            $soal = SoalPilgan::with('key')->where('soal_pg_id', $last_id)->first();
            $id_soal = 'soal_pg_id';
            $id_jwb = 'key_pilgan_id';
            return view('admin.soal.ubah-jawaban', compact('soal', 'tipe_soal', 'id_soal', 'id_jwb'));
        }else if($tipe_soal == '2d'){
            $soal = Soal2d::with('key')->where('soal_2d_id', $last_id)->first();
            $id_soal = 'soal_2d_id';
            $id_jwb = 'key_2d_id';
            return view('admin.soal.ubah-jawaban', compact('soal', 'tipe_soal', 'id_soal', 'id_jwb'));
        }
    }
    function prosesUbahJawaban(Request $request){
        $total_jawaban = count($request->pilihan);
        $tipe_soal = $request->tipe_soal;

        if($tipe_soal == 'pilgan'){
            for($i = 1; $i <= $total_jawaban; $i++){
                KeyPilgan::where('key_pilgan_id', $request->id[$i])->update([
                    'pilihan' => $request->pilihan[$i],
                    'value_pilihan' => $request->value_pilihan[$i],
                ]);
            }
        }else if($tipe_soal == '2d'){
            for($i = 1; $i <= $total_jawaban; $i++){
                Key2d::where('key_2d_id', $request->id[$i])->update([
                    'pilihan' => $request->pilihan[$i],
                    'value_pilihan' => $request->value_pilihan[$i],
                ]);
            }
        }
        return redirect()->route('admin-soal', $tipe_soal);
    }
    function prosesHapusSoal($id, $tipe){
        if($tipe == 'pilgan'){
            $data = SoalPilgan::destroy($id);
            $data2 = KeyPilgan::where('soal_pg_id', $id)->delete();
            // if($data && $data2){
            //     return redirect()->route('admin-soal', $tipe)->with(['success' => 'Data soal dan jawaban berhasil dihapus']);
            // }
        }else if($tipe == '2d'){
            $data = Soal2d::destroy($id);
            $data2 = Key2d::where('soal_2d_id', $id)->delete();
            // if($data && $data2){
            //     return redirect()->route('admin-soal', $tipe)->with(['success' => 'Data soal dan jawaban berhasil dihapus']);
            // }
        }
        return redirect()->route('admin-soal', $tipe)->with(['success' => 'Data soal dan jawaban berhasil dihapus']);
    }
}
