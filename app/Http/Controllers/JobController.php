<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{

    public function home(){
        return view('home');
    }

    public function tentang(){
        return view('tentang');
    }

    public function create(){
        return view('sijob.create');
    }

}
