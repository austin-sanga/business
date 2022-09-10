@extends('layouts.main')

@section('content')

{{-- link towards the previous page --}}
<div class="row">
    <div class="col-auto"><a href="{{ url()->previous() }}"><i class="bi bi-arrow-left-short" style="font-size: 40px; color:#0B9050"> </i></a></div>
    <div class="col"><h5 class="text-center pt-3 me-5" style="color:#0B9050 ">Ongoing project</h5></div>
</div>

<div class="bg-white p-3"  style="height:85vh;">

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
    <div class="m-3">
        <div><h5 class="text-muted ">Project manager notice</h5></div>
        <div class="rounded p-2" style="background-color: #F5F5F5 ">
            <h5>{{-- title --}} Lorem, ipsum dolor.</h5>
            <p>{{-- paragraph of content --}} Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel ducimus quos, vero minima sint culpa dolores eligendi omnis ut iste magnam reiciendis dicta inventore quam aut non. Odit distinctio, debitis cumque alias nulla, sunt sint sed nihil, cum a molestias magni architecto consequatur autem provident quaerat reiciendis rerum. Facere odit magnam est doloremque minima eaque minus dicta deserunt debitis optio?</p>
        </div>
    </div>

    <div class="text-end mt-3">
        <button class="btn btn-success px-5 me-3">Mature</button>
    </div>

</div>

@stop
