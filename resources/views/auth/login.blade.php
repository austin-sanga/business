@extends('layouts.auth')

@section('content')

<div class="text-center mt-5">
<img src="images/Group 2.png" alt="">
</div>


<div class="container-md   p-3 ">

    <div>
        <h3>Welcome member,</h3>
    </div>

    @if($errors->any())
<div >
    @foreach ($errors->all() as $error )
    <div class="alert alert-danger" role="alert">
      {{ $error }}
    </div>
    @endforeach
</div>
@endif

    <form class="" action="/login" method="POST">
      @csrf
  {{-- <div class="form-floating mb-3">
    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
    <label for="email">Email</label>
  </div> --}}
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="phone_number">
    <label for="phone_number">phone number</label>
  </div>
  <div class="form-floating mb-3">
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    <label for="password">Password</label>
  </div>

  <div class="row">
    <div class="col">
    <label for="remember">
        <input type="checkbox" id="remember" name="remember">
        <span>Remember me</span>
    </label>
    </div>
    <div class="col text-end"><a href="#" style="color: #0B9050">Forgot password?</a>
    </div>
  </div>

<div class="text-center">
    <button type="submit" class="btn btn-success btn-lg" >Login</button>
</div>
    </form>
</div>


@stop
