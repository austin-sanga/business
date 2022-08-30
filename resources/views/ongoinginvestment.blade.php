@extends('layouts.main')

@section('content')

<h5 class="text-center" style="color:#0B9050 ">Ongoing investment</h5>

<div class="bg-white p-3"  style="height:85vh;">

    <div class="px-3 pt-4">
        <div class="row ">
        <div class="col"><span>Name</span></div>
        <div class="col  justify-content-end text-end"><span>{{-- name of project --}}project phase 1</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Start date</span></div>
        <div class="col  justify-content-end text-end"><span>{{-- date of start --}}25 july 2020</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>End date</span></div>
        <div class="col  justify-content-end text-end"><span>{{-- date of end --}}27 july 2021</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Invested</span></div>
        <div class="col  justify-content-end text-end"><span>{{-- invested amount --}}23,000,000</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Est. ROI</span></div>
        <div class="col  justify-content-end text-end"><span>{{-- amount --}}120,000,000</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Contract copy</span></div>
        <div class="col  justify-content-end text-end"><button class="rounded px-3" style="background-color: #0B9050">download</button></div>{{-- contract download link --}}
        </div>
        <hr>
    </div>


</div>

@stop
