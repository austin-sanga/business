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
        <div class="col"><span>Name</span></div>
        <div class="col  justify-content-end text-end"><span>{{-- name of project --}}project phase 1</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Start Date</span></div>
        <div class="col  justify-content-end text-end"><span>{{-- date of start --}}25 july 2020</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>est.Duration</span></div>
        <div class="col  justify-content-end text-end"><span>{{-- duration --}}10 months</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Budget</span></div>
        <div class="col  justify-content-end text-end"><span>{{-- invested amount --}}23,000,000</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>est.ROI</span></div>
        <div class="col  justify-content-end text-end"><span>{{-- amount --}}120,000,000</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Project manager</span></div>
        <div class="col  justify-content-end text-end"><span>Mr john john</span></div>{{-- name of the project manager --}}
        </div>
        <hr>
    </div>

    <div class="ms-3"><span>Contributors</span></div>

    {{-- recursions on contributors accounts --}}
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Project manager</span></div>
        <div class="col  justify-content-end text-end"><input type="email" class="form-control" id="inputEmail3"></div>
        </div>
        <hr>
    </div>

    <div class="mt-3">
        <button class="btn btn-lg btn-success mb-3"  style="position: absolute; bottom:10px; ; ">Confirm start details</button>
    </div>

</div>

@stop
