<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeyPilgan extends Model
{
    use HasFactory;
    protected $table = 'key_pilgan';
    protected $guarded = ['key_pg_id'];
    protected $primaryKey = 'key_pg_id';
}
