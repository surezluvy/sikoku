<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\SoalImport;
use Illuminate\Http\Request;
use App\Models\SoalPilgan;
use App\Models\Soal2d;
use App\Models\Key2d;
use App\Models\KeyPilgan;
use Maatwebsite\Excel\Facades\Excel;

class SoalController extends Controller
{
    function index($tipe){
        if($tipe == 'pilgan'){
            $kumpulan_soal = SoalPilgan::with('key')->get();
            $id = 'soal_pg_id';
            $id_key = 'key_pilgan_id';
            return view('admin.soal.index', compact('kumpulan_soal', 'tipe', 'id', 'id_key'));
        }else if($tipe == '2d'){
            $kumpulan_soal = Soal2d::with('key')->get();
            $id = 'soal_2d_id';
            $id_key = 'key_2d_id';
            return view('admin.soal.index', compact('kumpulan_soal', 'tipe', 'id', 'id_key'));
        }
    }
    // function tambahSoal($tipe){
    //     return view('admin.soal.tambah-soal', compact('tipe'));
    // }
    function prosesTambahSoal(Request $request){
        $validateData = $request->validate([
            'pertanyaan' => 'required|string|min:5',
            'tipe' => 'required',
        ]);

        if($validateData['tipe'] == 'pilgan'){
            $id = SoalPilgan::insertGetId([
                'pertanyaan' => $validateData['pertanyaan']
            ]);
            
            for($i = 0; $i <= count($request->pilihan) -1; $i++){
                KeyPilgan::insert([
                    'soal_pg_id' => $id,
                    'pilihan' => $request->pilihan[$i],
                    'value_pilihan' => $request->value_pilihan[$i]
                ]);
            }

        }else if($validateData['tipe'] == '2d'){
            $id = Soal2d::insertGetId([
                'pertanyaan' => $validateData['pertanyaan']
            ]);
            
            for($i = 0; $i <= count($request->pilihan) -1; $i++){
                Key2d::insert([
                    'soal_2d_id' => $id,
                    'pilihan' => $request->pilihan[$i],
                    'value_pilihan' => $request->value_pilihan[$i]
                ]);
            }
        }

        $tipe_soal = $validateData['tipe'];
        return redirect()->route('admin-soal', $tipe_soal);
    }
    function prosesTambahSoalExcel(Request $request){
        $soal_excel = Excel::toArray(new SoalImport, $request->file('soal'));
        $soal = array();

        for($i = 0; $i <= count($soal_excel[0]) - 1; $i++){
            $ids = count($soal) - 1;
            if($soal_excel[0][$i]['pertanyaan'] != null){
                $soal[] = [
                    'pertanyaan' => $soal_excel[0][$i]['pertanyaan'],
                    'key' => [
                        [
                            'pilihan' => $soal_excel[0][$i]['pilihan'],
                            'value_pilihan' => $soal_excel[0][$i]['poin'],
                        ],
                    ]
                ];
            }else{
                $soal[$ids]['key'][] = [
                    'pilihan' => $soal_excel[0][$i]['pilihan'],
                    'value_pilihan' => $soal_excel[0][$i]['poin']];
            }
        }

        if($request->tipe === 'pilgan'){
            for($k = 0; $k <= count($soal) - 1; $k++){
                $id = SoalPilgan::insertGetId([
                    'pertanyaan' => $soal[$k]['pertanyaan'],
                ]);
                for($l = 0; $l <= count($soal[$k]['key']) - 1; $l++){
                    $tambahKey = KeyPilgan::create([
                        'soal_pg_id' => $id,
                        'pilihan' => $soal[$k]['key'][$l]['pilihan'],
                        'value_pilihan' => $soal[$k]['key'][$l]['value_pilihan'],
                    ]);
                }
            }
            if($tambahKey){
                return back()->with('success', 'Berhasil menambahkan soal');
            }
        }else if($request->tipe === '2d'){
            for($k = 0; $k <= count($soal) - 1; $k++){
                $id = Soal2d::insertGetId([
                    'pertanyaan' => $soal[$k]['pertanyaan'],
                ]);
                for($l = 0; $l <= count($soal[$k]['key']) - 1; $l++){
                    $tambahKey = Key2d::create([
                        'soal_2d_id' => $id,
                        'pilihan' => $soal[$k]['key'][$l]['pilihan'],
                        'value_pilihan' => $soal[$k]['key'][$l]['value_pilihan'],
                    ]);
                }
            }
            if($tambahKey){
                return back()->with('success', 'Berhasil menambahkan soal');
            }
        }
    }
    // function tambahJawaban($last_id, $tipe_soal){
    //     return view('admin.soal.tambah-jawaban', compact('last_id', 'tipe_soal'));
    // }
    // function prosesTambahJawaban(Request $request){

    //     $validateData = $request->validate([
    //         'pilihan' => 'required|string',
    //         'value_pilihan' => 'required',
    //     ]);

    //     $tipe_soal = $request->tipe_soal;

    //     if($tipe_soal == 'pilgan'){
    //         $validateData['soal_pg_id'] = $request->soal_id;
    //         KeyPilgan::create($validateData);
    //     }else if($tipe_soal == '2d'){
    //         $validateData['soal_2d_id'] = $request->soal_id;
    //         Key2d::create($validateData);
    //     }
    //     return redirect()->route('admin-soal', $tipe_soal);
    // }
    // function ubahSoal($id, $tipe){
    //     if($tipe == 'pilgan'){
    //         $soal = SoalPilgan::where('soal_pg_id', $id)->first();
    //         return view('admin.soal.ubah-soal', compact('soal', 'tipe', 'id'));
    //     }else if($tipe == '2d'){
    //         $soal = Soal2d::where('soal_2d_id', $id)->first();
    //         return view('admin.soal.ubah-soal', compact('soal', 'tipe', 'id'));
    //     }
    // }
    function prosesUbahSoal(Request $request){
        $validateData = $request->validate([
            'pertanyaan' => 'required|string|min:5',
            'tipe' => 'required',
        ]);
        if($validateData['tipe'] == 'pilgan'){
            SoalPilgan::findOrFail($request->id)->update([
                'pertanyaan' => $validateData['pertanyaan'],
            ]);
            
            for($i = 0; $i <= count($request->pilihan) -1; $i++){
                KeyPilgan::where('key_pilgan_id', $request->id_key[$i])->update([
                    'pilihan' => $request->pilihan[$i],
                    'value_pilihan' => $request->value_pilihan[$i]
                ]);
            }
        }else if($validateData['tipe'] == '2d'){
            Soal2d::findOrFail($request->id)->update([
                'pertanyaan' => $validateData['pertanyaan'],
            ]);
            
            for($i = 0; $i <= count($request->pilihan) -1; $i++){
                Key2d::where('key_2d_id', $request->id_key[$i])->update([
                    'pilihan' => $request->pilihan[$i],
                    'value_pilihan' => $request->value_pilihan[$i]
                ]);
            }
        }

        $tipe_soal = $validateData['tipe'];
        return redirect()->route('admin-soal', $tipe_soal);
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
