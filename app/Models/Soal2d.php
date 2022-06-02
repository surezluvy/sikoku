<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal2d extends Model
{
    use HasFactory;
    protected $table = 'soal_2d';
    protected $guarded = ['soal_2d_id'];
    protected $primaryKey = 'soal_2d_id';

    public function key(){
        return $this->hasMany(Key2d::class, 'soal_2d_id', 'soal_2d_id');
    }
}
