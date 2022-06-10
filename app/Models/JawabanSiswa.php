<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanSiswa extends Model
{
    use HasFactory;
    protected $table = 'jawaban_siswa';
    protected $guarded = ['jawaban_siswa_id'];
    protected $primaryKey = 'jawaban_siswa_id';
    protected $casts = ['jawaban' => 'array'];

    public function batchUjian(){
        return $this->belongsTo(BatchUjian::class, 'batch_id', 'batch_id');
    }

    public function paketSoal(){
        return $this->belongsTo(PaketSoal::class, 'paket_soal_id', 'paket_soal_id');
    }
}
