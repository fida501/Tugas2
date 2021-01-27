@extends('master.master')

@section('title', 'Edit Data Siswa')

@section('content')

<form action="{{ route('updateSiswa', $siswa->id) }}" method="POST">
@csrf
<div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input value="{{ $siswa-> nama }}" type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Telepon</label>
    <input value="{{ $siswa-> telpon }}" type="text" name="telpon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telepon">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Alamat</label>
    <input value="{{ $siswa-> alamat }}" type="text" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Alamat">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection