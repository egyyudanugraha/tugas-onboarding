<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use File;

class CrudController extends Controller
{
    public function home(){
        return view('home');
    }

    public function index(){
        $data = DB::table('biodata')->get();
        return view('index',['biodata' => $data]);
    }

    public function cari($id){
        $data = DB::table('biodata')->where('idpeserta',$id)->get();
        return view('index',['biodata' => $data]);
    }

    public function tambah(Request $request){
        $request->file('file')->storeAs('public',$request->idpeserta);
        
        DB::table('biodata')->insert([
            'idpeserta' => $request->idpeserta,
            'image' => $request->idpeserta,
            'nama' => $request->nama,
            'jeniskelamin' => $request->jeniskelamin,
            'departemen' => $request->departemen,
            'notelp' => $request->notelp,
        ]);

        return redirect('/home');
    }

    public function hapus($id){
        // hapus file
        $data = DB::table('biodata')->where('idpeserta',$id)->delete();
        return redirect('/home');
    }

    public function show($id){
        $data = DB::table('biodata')->where('idpeserta',$id)->get();
        return view('update',['biodata'=>$data]);
    }

    public function edit(Request $request){
        DB::table('biodata')->where('nama',$request->nama)->update([
            'nama' => $request->nama,
            'jeniskelamin' => $request->jeniskelamin,
            'departemen' => $request->departemen,
            'notelp' => $request->notelp,
        ]);

        return redirect('/home');
    }
}
