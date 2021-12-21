@extends('layouts.admin')

@section('content')

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	<thead>
		<tr>
            <th>Jadwal Sidang</th>
			<th>ID Dosen</th>
			<th>NIM</th>
            <th>Detail</th>
            {{-- <th>Delete</th> --}}
		</tr>
	</thead>
	<tbody>
		@foreach($jadwal as $j)
	<tr>
        <td>{{ $j->JADWAL_SIDANG }}</td>
		<td>{{ $j->ID_DOSEN }}</td>
        <td>{{ $j->NIM }}</td>
        <td>
            <form action="{{ url('/jadwal-detail') }}" method="get">
                <input hidden value="{{ $j->ID_SIDANG }}" name="ID_SIDANG">
                <button type="submit" class="btn btn-info btn-sm")>Edit</button>
            </form>
        </td>
        {{-- <td>
            <a href="{{ url('/santri-hapus',$s->IDSANTRI) }}"><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button></a>
        </td> --}}
	</tr>
	@endforeach
	</tbody>

</table>


@endsection
