@extends('layouts.template')

@section('content')
        <div class="container">
            <div class="area">
              <div class="kiri"><h4>Data Prodi</h4></div>
              <div class="kanan"><a href="{{ route('prodi.create')}}" class="btn btn-primary">Tambah Prodi</a></div>
            </div>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Prodi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data_prodi as $prodi)
                <tr>
                  <td>{{ ++$no }}</td>
                  <td>{{ $prodi->nama_prodi }}</td>
                  <td>
                  <form action="{{ route('prodi.destroy', $prodi->id) }}" method="post">@csrf
                  <a href="{{ route('prodi.edit', $prodi->id) }}" class="btn btn-info">Edit</a>
                  <a href="{{ route('prodi.view', $prodi->id) }}" class="btn btn-primary">View</a>
                  <button type="submit" class="btn btn-danger" onClick="return confirm('Yakin mau dihapus?')">Hapus</button></td>
                  </form>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
@endsection
