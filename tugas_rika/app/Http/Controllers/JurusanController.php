<?php

namespace App\Http\Controllers;
use App\Models\Jurusan;


use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        $no = 0;
        $data_jurusan = Jurusan::all()->sortByDesc('id');
        return view('jurusan.index', compact('data_jurusan', 'no'));
    }
    public function view($id){
        $data_jurusan = Jurusan::find($id);
        return view('jurusan.view', compact('data_jurusan'));
    }

    public function create(){
        return view('jurusan.create');
    }

    public function store(){
        $data_jurusan = new Jurusan;
        $data_jurusan->nama_jurusan = request('nama');

        $data_jurusan->save();
        return redirect('/jurusan');
    }

    public function edit($id){
        $data_jurusan = Jurusan::find($id);
        return view('jurusan.edit', compact('data_jurusan'));
    }

    public function update($id){
        $data_jurusan = Jurusan::find($id);

        $data_jurusan->nama_jurusan = request('nama');

        $data_jurusan->save();
        return redirect('/jurusan');
    }

    public function destroy($id) {
        $data_jurusan = Jurusan::find($id);
        $data_jurusan->delete();
        return redirect('/jurusan');
    }

}
