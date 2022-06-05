<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SoalPilgan;
use App\Models\Soal2d;
use App\Models\Key2d;
use App\Models\KeyPilgan;

class AdminController extends Controller
{
    function index()
    {
        return view('admin.index');
    }
}
