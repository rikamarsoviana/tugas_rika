@extends('layouts.template')

@section('content')
  <div class="container">
    <h4>Tambah Jurusan</h4>
    <form method="post" action="{{ route('jurusan.store') }}">
      @csrf
      <div class="form-group row">
        <label for="nama_jurusan" class="col-sm-2 col-form-label">Nama Jurusan</label>
        <div class="col-sm-10">
          <input type="text" id="nama" name="nama" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-success">Simpan</button>
          <a href="/jurusan" class="btn btn-warning">Batal</a>
        </div>
      </div>
    </form>
  </div>
@endsection