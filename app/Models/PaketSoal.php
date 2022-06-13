<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketSoal extends Model
{
    use HasFactory;
    protected $table = 'paket_soal';
    protected $guarded = ['paket_soal_id'];
    protected $primaryKey = 'paket_soal_id';
    protected $casts = ['soal' => 'array'];
    
    public function userAdd(){
        return $this->belongsTo(User::class, 'user_add', 'user_id');
    }
}
