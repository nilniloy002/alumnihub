<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class HomeController extends Controller
{
   public function Rjemch()
    {
        return view('home.rjemch');
    }
   public function Humch()
    {
        return view('home.humch');
    }
   public function Hsemch()
    {
        return view('home.hsemch');
    }
   public function Hpc()
    {
        return view('home.hpc');
    }
   public function Hub()
    {
        return view('home.hub');
    }
   public function Hiuam()
    {
        return view('home.hiuam');
    }

   
    
}
