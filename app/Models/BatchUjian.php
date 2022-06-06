<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BatchUjian extends Model
{
    use HasFactory;
    protected $table = 'batch_ujian';
    protected $guarded = ['batch_id'];
    protected $primaryKey = 'batch_id';
    protected $casts = ['siswa' => 'array'];

    public function transaksi(){
        return $this->belongsTo(Transaksi::class, 'transaksi_id', 'transaksi_id');
    }
}
