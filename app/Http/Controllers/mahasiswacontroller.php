<?php

namespace App\Http\Controllers;

use App\mahasiswa;
use Illuminate\Http\Request;

class mahasiswacontroller extends Controller
{
    public function index()
    {
        $mahasiswa = mahasiswa::all();
        return view ('mahasiswa.index',compact('mahasiswa'));
    }

    public function create()
    {
        return "hallo saya create, dari mahasiswa controller";
    }
}
