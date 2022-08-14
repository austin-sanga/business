@extends('layouts.auth')

@section('content')
{{-- area of distinction --}}
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
    <form class="" action="/register" method="POST">
      @csrf
<div class="form-floating mb-3">
    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
    <label for="first_name">First Name</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="Middle Name">
    <label for="middle_name">Middle Name</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
    <label for="last_name">Last Name</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="nida" name="nida" placeholder="NIDA">
    <label for="nida">NIDA</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Phone number">
    <label for="phone_number">Phone number</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="second_phone_number" name="second_phone_number" placeholder="Second phone number" value="null">
    <label for="second_phone_number">Second phone number</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
    <label for="email">Email</label>
  </div>
  <div class="form-floating mb-3">
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    <label for="password">Password</label>
  </div>
  <div class="form-floating mb-3">
    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
    <label for="password_confirmation">Confirm Password</label>
  </div>

  <div class="mb-3">
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="gender" value="1">
    <label class="form-check-label" for="male">Male</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="gender" value="2">
    <label class="form-check-label" for="female">Female</label>
  </div>
</div>
<div class="text-center">
    <button type="submit" class="btn btn-success btn-lg" >Register</button>
</div>
    </form>
</div>



@stop

