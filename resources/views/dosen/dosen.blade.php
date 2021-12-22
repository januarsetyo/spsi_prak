@extends('layouts.dosen')

@section('content')

<div class="col-lg-10">
    <div class="users-table table-wrapper">
<table class="table table-bordered border-primary">
    <thead>
      <tr>
        <th scope="col">id dosen</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">No Hp</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Email</th>
        <th scope="col">created at</th>
        <th scope="col">Deleted at</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($kecamatan as $datakecamatan)
        <tr>
            <td scope="row">{{ $datakecamatan->id}}</td>
            <td scope="row">{{ $datakecamatan->nama }}</td>
            <td scope="row">{{ $datakecamatan->alamat }}</td>
            <td scope="row">{{ $datakecamatan->no_hp }}</td>
            <td scope="row">{{ $datakecamatan->jenis_kelamin }}</td>
            <td scope="row">{{ $datakecamatan->email }}</td>
            <td scope="row">{{ $datakecamatan->created_at }}</td>
            <td scope="row">{{ $datakecamatan->updated_at }}</td>
            <td>
              <form action="/edit-dosen" method="post" class="d-inline">
                  @csrf
                  <input type="hidden" name="id" value="{{ $datakecamatan->id }}">
                  <button class="btn btn-primary tombol border-0">
                      Edit
                  </button>
              </form>
            </td>
            <td>
              <a href="/hapus-dosen{{$datakecamatan->id}}" class="btn btn-primary tombol border-0">Hapus</a>
            </td>
          </tr>
        @endforeach

    </tbody>
  </table>
</div>
</div>
  @endsection
