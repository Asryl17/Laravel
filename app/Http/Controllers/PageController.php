<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class PageController extends Controller
{
  
    public function home()
    {
        return view('index');
    }
    public function jadwal()
    {
        return view('jadwal',['judul'=>'SUSENAS']);
    }

    public function pelatihan()
    {
        return view('pelatihan');
    }


}