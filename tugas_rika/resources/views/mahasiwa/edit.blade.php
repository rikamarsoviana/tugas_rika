@extends('layouts.template')

@section('content')
  <div class="container">
    <h4>Edit Buku</h4>
    <form method="post" action="{{ route('mahasiswa.update', $data_mahasiswa->id) }}">
      @csrf
      <div class="form-group row">
        <label for="nama_mahasiswa" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
        <div class="col-sm-10">
          <input type="text" id="nama" name="nama" class="form-control" value="{{$data_mahasiswa->nama_mahasiswa}}">
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-success">Update</button>
          <a href="/mahasiswa" class="btn btn-warning">Batal</a>
        </div>
      </div>
    </form>
  </div>
@endsection