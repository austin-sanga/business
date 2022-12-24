@extends('layouts.main')

@section('content')

{{-- link towards the previous page --}}
<div class="row">
    <div class="col-auto"><a href="{{ url()->previous() }}"><i class="bi bi-arrow-left-short" style="font-size: 40px; color:#0B9050"> </i></a></div>
    <div class="col"><h5 class="text-center pt-3 me-5" style="color:#0B9050 ">Final draft</h5></div>
</div>

<div class="bg-white p-3"  style="height:85vh; position: relative;">

    <div class="px-3 pt-3">
        <div class="row ">
        <div class="col"><span>Name {{ $id }}</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $finaldetails->name }}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Start Date</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $date->format('j F,Y') }}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>est.Duration</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $finaldetails->est_duration }}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Budget</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $finaldetails->budget }}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>est.ROI {{ $finaldetails->id }}</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $finaldetails->est_roi }}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Project manager</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $finaldetails->first_name }} {{ $finaldetails->middle_name }} {{ $finaldetails->last_name }}</span></div>{{-- name of the project manager --}}
        </div>
        <hr>
    </div>

    <div class="ms-3 mb-3"><span>Contributors</span></div>

    {{-- recursions on contributors accounts --}}
    <div class="px-3">
        @foreach ($contributers as $contributers)
        <div class="row ">
            <div class="col"><span>{{ $contributers->first_name }} {{ $contributers->middle_name }} {{ $contributers->last_name }}</span></div>
            <div class="col  justify-content-end text-end"><span>{{ $contributers->sum }}/=</span></div>
            </div>
            <hr>
        @endforeach
    </div>


    <div class="mt-3">
        {{-- <form action="/officialstart/{{ $finaldetails->id }}" method="post"> --}}
            <a href="/officialstart/{{ $id }}">
            <button class="btn btn-lg btn-success mb-3"  style="position: absolute; bottom:10px;">Confirm start details</button>
            </a>
       {{--  </form> --}}
    </div>

</div>

@stop


{{--
    Auth
    user
    investment
    loans
    --}}
