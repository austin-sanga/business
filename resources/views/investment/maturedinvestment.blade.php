@extends('layouts.main')

@section('content')

{{-- link towards the previous page --}}
<div class="row">
    <div class="col-auto"><a href="{{ url()->previous() }}"><i class="bi bi-arrow-left-short" style="font-size: 40px; color:#0B9050"> </i></a></div>
    <div class="col"><h5 class="text-center pt-3 me-5" style="color:#0B9050 ">Matured Investment</h5></div>
</div>

<div class="bg-white p-3"  style="height:85vh;">

    <div class="px-3 pt-4">
        <div class="row ">
        <div class="col"><span>Name</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $maturedData->name }}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Start date</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $maturedData->start_date }}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Maturity date</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $maturedData->date_of_maturity }}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Invested</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $maturedData->budget }}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>ROI</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $maturedData->roi }}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Contract copy</span></div>
        <div class="col  justify-content-end text-end"><a href="/contractDownload/{{ $maturedData->project_contract }}"><button class="btn btn-success" style="background-color: #0B9050; color:white">download</button></a></div>{{-- contract download link --}}
        </div>
        <hr>
    </div>
    <div class="m-3">
        <div><h5 class="text-muted ">Project manager notice</h5></div>
        <div class="rounded p-2" style="background-color: #F5F5F5 ">
            <p>{{ $maturedData->manager_notice }}</p>
        </div>
    </div>



</div>

@stop
