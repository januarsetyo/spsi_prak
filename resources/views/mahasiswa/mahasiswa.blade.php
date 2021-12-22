@extends('layouts/admin')

@section('content')
<div class="col-lg-10">
    <div class="users-table table-wrapper">
<table class="table table-bordered border-primary">
    <thead>
      <tr>
        <th scope="col">NIM</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">No Hp</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Email</th>
        <th scope="col">created at</th>
        <th scope="col">Deleted at</th>
        <th scope="col">edit</th>
        <th scope="col">Deleted</th>
      </tr>
    </thead>
    <tbody>
        {{-- @foreach ($kecamatan as $datakecamatan)
        <tr>
            <td scope="row">{{ $datakecamatan->nim}}</td>
            <td scope="row">{{ $datakecamatan->nama }}</td>
            <td scope="row">{{ $datakecamatan->alamat }}</td>
            <td scope="row">{{ $datakecamatan->no_hp }}</td>
            <td scope="row">{{ $datakecamatan->jenis_kelamin }}</td>
            <td scope="row">{{ $datakecamatan->email }}</td>
            <td scope="row">{{ $datakecamatan->created_at }}</td>
            <td scope="row">{{ $datakecamatan->updated_at }}</td>
            <td>
              <form action="/edit-mahasiswa" method="post" class="d-inline">
                  @csrf
                  <input type="hidden" name="id" value="{{ $datakecamatan->id }}"> --}}
                  <button type="button" class="btn btn-warning">edit</button>

              {{-- </form>
            </td>
            <td> --}}
              {{-- <a href="/hapus-mahasiswa{{$datakecamatan->id}}"> --}}
                <button type="button" class="btn btn-danger">hapus</button>
              {{-- </a> --}}
            {{-- </td>
          </tr>
        @endforeach --}}
    </tbody>
  </table>
</div>
</div>
  @endsection
