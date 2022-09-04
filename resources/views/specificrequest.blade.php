@extends('layouts.main')

@section('content')

<h5 class="text-center" style="color:#0B9050 ">Specific request</h5>

<div class="bg-white p-3"  style="height:85vh;">

    <div class="px-3 pt-4">
        <div class="row ">
        <div class="col"><span>Name</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $data->first_name }} {{ $data->middle_name }} {{ $data->last_name }}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Date of request</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $data->created_at->format('d/m/Y') }}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>NIDA</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $data->nida }}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Phone number</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $data->phone_number }}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Email</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $data->email }}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <label for="Role">Assign role</label><br>

        <form method="POST" action="/updateRole">
            @csrf

            {{-- you have to pass the id but you out it hidden --}}
            <input type="hidden" name="id" value='{{ $data['id'] }}'>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="role" id="role" value="1">
          <label class="form-check-label" for="Admin">Admin</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="role" id="role" value="3">
          <label class="form-check-label" for="Member">Member</label>
        </div>
        <div class="text-center pt-3">
            <button type="submit" class="btn btn-success btn-lg" >Update Role</button>
        </div>
      </div>
    </form>




</div>

@stop
