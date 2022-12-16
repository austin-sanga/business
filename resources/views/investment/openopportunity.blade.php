@extends('layouts.main')

@section('content')

<h5 class="text-center" style="color:#0B9050 ">Open opportunity</h5>

<div class="bg-white p-3"  style="height:85vh;">

    <div class="px-3 pt-4">
        <div class="row ">
        <div class="col"><span>Name</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $open->name }}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>est.Start date</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $open->est_start_date }}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>est.Duration</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $open->est_duration }}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Budget</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $open->budget}}</span></div>
        </div>
        <div class="row text-muted">
            <div class="col"><span>aprox Per person</span></div>
            <div class="col  justify-content-end text-end"><span>{{ $open->budget/$ucount}} </span></div>
        </div>
        <div class="row text-muted">
            <div class="col"><span>Remaining</span></div>
            <div class="col  justify-content-end text-end"><span>{{$remaining}}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Est. ROI</span></div>
        <div class="col  justify-content-end text-end"><span>{{$open->est_roi}}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Project manager</span></div>
        <div class="col  justify-content-end text-end"><span>{{$open->first_name}} {{$open->middle_name}} {{$open->last_name}}</span></div>
        </div>
        <hr>
    </div>
    <div class="m-3">
        <div><h5 class="text-muted ">Project manager notice</h5></div>
        <div class="rounded p-2" style="background-color: #F5F5F5 ">
            <p>{{$open->manager_notice}}</p>
        </div>
    </div>


</div>

@stop
