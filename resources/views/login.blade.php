@extends('master.master')

@section('title', 'Login')
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
<form action="{{ route('postlogin') }}" method="POST">
@csrf
<div class="form-group"> 
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telepon">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
@endsection