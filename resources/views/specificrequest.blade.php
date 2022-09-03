@extends('layouts.main')

@section('content')

<h5 class="text-center" style="color:#0B9050 ">Specific request</h5>

<div class="bg-white p-3"  style="height:85vh;">

    <div class="px-3 pt-4">
        <div class="row ">
        <div class="col"><span>Name</span></div>
        <div class="col  justify-content-end text-end"><span>{{-- name of member --}}Johnn john john</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Date of request</span></div>
        <div class="col  justify-content-end text-end"><span>{{-- date of request --}}25 july 2020</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>NIDA</span></div>
        <div class="col  justify-content-end text-end"><span>{{-- Nida --}}200004-110745-151</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Phone number</span></div>
        <div class="col  justify-content-end text-end"><span>{{-- number --}}07298749291</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Email</span></div>
        <div class="col  justify-content-end text-end"><span>{{-- Email --}}test@yahoo.com</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <label for="Role">Assign role</label><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="role" id="role" value="1">
          <label class="form-check-label" for="Admin">Admin</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="role" id="role" value="3">
          <label class="form-check-label" for="Member">Member</label>
        </div>
      </div>
      <div class="text-center pt-3">
        <button type="submit" class="btn btn-success btn-lg" >Update Role</button>
    </div>




</div>

@stop
