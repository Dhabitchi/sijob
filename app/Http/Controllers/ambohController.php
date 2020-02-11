<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ambohController extends Controller
{
    public function tambah(){
        $user = User::all();

        return view('sijob.tambah', compact('user'));
    }
    public function store(Request $request){
        DB :: table('jobdesct')->insert([
           'nama' => $request -> nama,
            'job' => $request -> job
        ]);
        return redirect('/home/entrijob');
    }
    public function hapus($id){
        DB::table('jobdesct')->where('j_id',$id)->delete();

        return redirect('/home/entrijob');
    }
    public function edit($id){
        $user = User::all();
        $dhabit = DB::table('jobdesct')->where('j_id',$id)->get();

        return view('sijob.edit',['jobdesct' => $dhabit ],compact('user'));
    }
    public function update(Request $request, $id){
        DB::table('jobdesct')->where('j_id', $id)->update([
            'nama'=>$request->nama,
            'job'=>$request->job
        ]);
        return redirect('/home/entrijob');
    }
    public function status(){
        $user = User::all();

        return view('status.statusjob',compact('user'));
    }
}
