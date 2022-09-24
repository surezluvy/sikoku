<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Key2d extends Model
{
    use HasFactory;
    protected $table = 'key_2d';
    protected $guarded = ['key_2d_id'];
    protected $primaryKey = 'key_2d_id';
}
