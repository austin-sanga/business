@extends('layouts.main')

@section('content')

<h5 class="text-center" style="color:#0B9050 ">Mini Statement</h5>

<div class="container bg-white">
    {{-- after this is where the loop should be appearing --}}
    <div class="px-3">
        <h6>{{-- Date of transaction--}}Tuesday, 19 july 2022</h6>
        <div class="row ">
        <div class="col"><span>{{-- the prior word should be depending on the activity --}}Invested  mr kuku</span></div>
        <div class="col  justify-content-end text-end"><span>{{-- number --}}25,000,000TZS</span></div>
        </div>
        <hr>
    </div>

</div>

@stop
