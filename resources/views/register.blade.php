@extends('master.master')

@section('title', 'Register')
@section('content')
    <!-- @if($errors->any())
      <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $item)
                  <li>{{$item}}</li>
                @endforeach
            </ul>
      </div>
    @endif -->
<form action="/register" method="POST">
@csrf
<div class="form-group"> 
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
    @error('nama')
      <div class="small text-danger">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Telepon</label>
    <input type="text" name="telpon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telepon">
    @error('telpon')
      <div class="small text-danger">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Alamat</label>
    <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Alamat">
    @error('alamat')
      <div class="small text-danger">{{$message}}</div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection