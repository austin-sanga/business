@extends('layouts.main')

@section('content')

{{-- link towards the previous page --}}
<div class="row">
    <div class="col-auto"><a href="{{ url()->previous() }}"><i class="bi bi-arrow-left-short" style="font-size: 40px; color:#0B9050"> </i></a></div>
    <div class="col"><h5 class="text-center pt-3 me-5" style="color:#0B9050 ">Investment verification</h5></div>
</div>

<div class="bg-white p-3"  style="height:85vh;">

    <div class="px-3 pt-4">
        <div class="row ">
        <div class="col"><span>Name</span></div>
        <div class="col  justify-content-end text-end"><span>Mr johb patel</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Projected invested</span></div>
        <div class="col  justify-content-end text-end"><span>jocolondo investne</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Date of Deposit</span></div>
        <div class="col  justify-content-end text-end"><span>25 july 2021 </span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Date of filling</span></div>
        <div class="col  justify-content-end text-end"><span>25 july 2021 </span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Amount invested</span></div>
        <div class="col  justify-content-end text-end"><span>120,000,000</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Proof of Deposit</span></div>
        </div>
        <hr>
    </div>
    <div class="m-3 mt-2">
        <img src="/images/demo.png" alt="" class="img-fluid">
    </div>

    <div class="row">
        <div class="col ms-3"><button class="btn btn-danger px-5" type="button">Delete</button></div>
        <div class="col text-end me-3"><button class="btn btn-success px-5" type="submit">Accept</button></div>
    </div>



</div>

@stop
