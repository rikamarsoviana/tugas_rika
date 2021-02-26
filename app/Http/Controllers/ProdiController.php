<?php

namespace App\Http\Controllers;
use App\Models\Prodi;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index()
    {
        $no = 0;
        $data_prodi = Prodi::all()->sortByDesc('id');
        return view('prodi.index', compact('data_prodi', 'no'));
    }
    public function view($id){
        $data_prodi = Prodi::find($id);
        return view('prodi.view', compact('data_prodi'));
    }

    public function create(){
        return view('prodi.create');
    }

    public function store(){
        $data_prodi = new Prodi;
        $data_prodi->nama_prodi = request('nama');

        $data_prodi->save();
        return redirect('/prodi');
    }

    public function edit($id){
        $data_prodi = Prodi::find($id);
        return view('prodi.edit', compact('data_prodi'));
    }

    public function update($id){
        $data_prodi = Prodi::find($id);

        $data_prodi->nama_prodi = request('nama');

        $data_prodi->save();
        return redirect('/prodi');
    }

    public function destroy($id) {
        $data_prodi = Prodi::find($id);
        $data_prodi->delete();
        return redirect('/prodi');
    }
}
