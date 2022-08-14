@extends('layouts.auth')

@section('content')

<h2 class="text-center" style="color: #0B9050">Register</h2>

@if($errors->any())
<div class="container-md">
    @foreach ($errors->all() as $error )
    <div class="alert alert-danger" role="alert">
      {{ $error }}
    </div>
    @endforeach
</div>
@endif


<div class="container-md card border-light shadow p-3 rounded">
    <form class="" action="/login" method="POST">
      @csrf
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
    <label for="email">Email</label>
  </div>
  <div class="form-floating mb-3">
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    <label for="password">Password</label>
  </div>
<div class="text-center">
    <button type="submit" class="btn btn-success btn-lg" >Login</button>
</div>
    </form>
</div>


@stop
