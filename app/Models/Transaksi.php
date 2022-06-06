<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $guarded = ['transaksi_id'];
    protected $primaryKey = 'transaksi_id';

    public function user(){
        return $this->hasMany(User::class, 'user_id', 'user_id');
    }

    public function paketSoal(){
        return $this->hasMany(PaketSoal::class, 'paket_soal_id', 'paket_soal_id');
    }
}
