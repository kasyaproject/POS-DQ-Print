<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class laporanController extends Controller
{
    //
    public function index()
    {      
         return view('laporan.index');
    }

    public function create()
    {
        
    }
}
