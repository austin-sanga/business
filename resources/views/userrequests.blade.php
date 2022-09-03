@extends('layouts.main')

@section('content')

<h5 class="text-center" style="color:#0B9050 ">User Requests</h5>

<div class="container pt-4 bg-white" >
    <div class="px-3 ">
        <div class="row text-muted">
        <div class="col"><span>Name</span></div>
        <div class="col  justify-content-end text-end"><span>Request date</span></div>
        </div>
        <hr>
    </div>

    {{-- below is the recuression for the member requests --}}
    <div class="px-3 ">
        <a href="specificrequest" class="text-decoration-none">
        <div class="row text-black">
        <div class="col "><span>{{-- name of member --}}John John</span></div>
        <div class="col  justify-content-end text-end"><span>{{-- request date --}}25 july 2020</span></div>
        </div>
        </a>
        <hr>
    </div>

</div>
@stop
