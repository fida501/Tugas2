@extends('master.master')

@section('title', 'Table')

@section('content')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama</th>
      <th scope="col">Telepon</th>
      <th scope="col">Alamat</th>
      <th scope="col">Opsi</th>

    </tr>
    @php
    $no = 1;
    @endphp
   @foreach($allsiswa as $s)
   <tr>
            <td>{{ $no++ }}</td>
			<td>{{ $s->nama }}</td>
			<td>{{ $s->telpon }}</td>
			<td>{{ $s->alamat }}</td>   
            <td>
				<a href="{{ route('editSiswa', $s->id) }}" class="btn btn-success btn-flat btn-sm">Edit</a>
				
				<a href="{{ route('deleteSiswa', $s->id)}}" class="btn btn-danger btn-flat btn-sm">Hapus</a>
			</td>
</tr>

   @endforeach
  </thead>
</table>




@endsection

