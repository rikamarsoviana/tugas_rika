@extends('layouts.template')

@section('content')
        <div class="container">
            <div class="area">
              <div class="kiri"><h4>Data Jurusan</h4></div>
              <div class="kanan"><a href="{{ route('jurusan.create')}}" class="btn btn-primary">Tambah Jurusan</a></div>
            </div>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Jurusan</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data_jurusan as $jurusan)
                <tr>
                  <td>{{ ++$no }}</td>
                  <td>{{ $jurusan->nama_jurusan }}</td>
                  <td>
                  <form action="{{ route('jurusan.destroy', $jurusan->id) }}" method="post">@csrf
                  <a href="{{ route('jurusan.edit', $jurusan->id) }}" class="btn btn-info">Edit</a>
                  <a href="{{ route('jurusan.view', $jurusan->id) }}" class="btn btn-primary">View</a>
                  <button type="submit" class="btn btn-danger" onClick="return confirm('Yakin mau dihapus?')">Hapus</button></td>
                  </form>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
@endsection
