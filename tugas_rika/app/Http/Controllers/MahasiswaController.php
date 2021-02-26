<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index(){
        $no = 0;
        $data_mahasiswa = Mahasiswa::all()->sortByDesc('id');
        return view('mahasiwa.index', compact('data_mahasiswa', 'no'));
    }

    public function view($id){
        $data_mahasiswa = Mahasiswa::find($id);
        return view('mahasiwa.view', compact('data_mahasiswa'));
    }

    public function create(){
        return view('mahasiwa.create');
    }

    public function store(){
        $data_mahasiswa = new Mahasiswa;
        $data_mahasiswa->nama_mahasiswa = request('nama');

        $data_mahasiswa->save();
        return redirect('/mahasiswa');
    }

    public function edit($id){
        $data_mahasiswa = Mahasiswa::find($id);
        return view('mahasiwa.edit', compact('data_mahasiswa'));
    }

    public function update($id){
        $data_mahasiswa = Mahasiswa::find($id);

        $data_mahasiswa->nama_mahasiswa = request('nama');

        $data_mahasiswa->save();
        return redirect('/mahasiswa');
    }

    public function destroy($id) {
        $data_mahasiswa = Mahasiswa::find($id);
        $data_mahasiswa->delete();
        return redirect('/mahasiswa');
    }
}
