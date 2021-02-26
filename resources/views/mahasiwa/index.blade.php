@extends('layouts.template')

@section('content')
        <div class="container">
            <div class="area">
              <div class="kiri"><h4>Data Mahasiswa</h4></div>
              <div class="kanan"><a href="{{ route('mahasiswa.create')}}" class="btn btn-primary">Tambah Mahasiswa</a></div>
            </div>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Mahasiswa</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data_mahasiswa as $mahasiswa)
                <tr>
                  <td>{{ ++$no }}</td>
                  <td>{{ $mahasiswa->nama_mahasiswa }}</td>
                  <td>
                  <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="post">@csrf
                  <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-info">Edit</a>
                  <a href="{{ route('mahasiswa.view', $mahasiswa->id) }}" class="btn btn-primary">View</a>
                  <button type="submit" class="btn btn-danger" onClick="return confirm('Yakin mau dihapus?')">Hapus</button></td>
                  </form>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
@endsection
