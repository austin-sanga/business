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
        <div class="col"><span>Name {{ $id }}</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $ongoing->projectName }}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Start Date</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $ongoing->start_date }}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>est.Duration</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $ongoing->est_duration }}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Budget</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $ongoing->budget }}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>est.ROI</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $ongoing->est_roi }}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Project manager</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $ongoing->fname}} {{ $ongoing->mname}} {{ $ongoing->lname}}</span></div>{{-- name of the project manager --}}
        </div>
        <hr>
    </div>
    <div class="m-3">
        <div><h5 class="text-muted ">Project manager notice</h5></div>
        <div class="rounded p-2" style="background-color: #F5F5F5 ">
            <p>{{ $ongoing->manager_notice}}</p>
        </div>
    </div>

    <div class="text-end mt-3">
        <a href="/matureproject/{{ $id }}"><button class="btn btn-success px-5 me-3">Mature</button></a>
    </div>

</div>

@stop
