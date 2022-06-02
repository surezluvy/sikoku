<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoalPilgan extends Model
{
    use HasFactory;
    protected $table = 'soal_pilgan';
    protected $guarded = ['soal_pg_id'];
    protected $primaryKey = 'soal_pg_id';

    public function key(){
        return $this->hasMany(KeyPilgan::class, 'soal_pg_id', 'soal_pg_id');
    }
}
