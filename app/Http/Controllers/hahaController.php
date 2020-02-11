<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hahaController extends Controller
{

    public function home(){
        return view('home');
    }

    public function entrijob(){
        return view('sijob.entrijob');
    }

    public function staff(){
        return view('sijob.staff');
    }

    public function tambah(){
        return view('sijob.tambah');
    }

}
