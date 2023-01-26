@extends('layouts.main')

@section('content')


{{-- link to previous page --}}
<div class="row">
    <div class="col-auto"><a href="{{ url()->previous() }}"><i class="bi bi-arrow-left-short" style="font-size: 40px; color:#0B9050"> </i></a></div>
    <div class="col"><h5 class="text-center pt-3 me-5" style="color:#0B9050 ">Ongoing investment</h5></div>
</div>


<div class="bg-white p-3"  style="height:85vh;">

    <div class="px-3 pt-4">
        <div class="row ">
        <div class="col"><span>Name</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $ongoing->name }}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Start date</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $ongoing->start_date }}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>End date</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $ongoing->date_of_maturity }}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Invested</span></div>
        <div class="col  justify-content-end text-end"><span>{{-- invested amount --}}23,000,000</span></div>
        {{-- kuna haja ya kutofautisha invested by whole community na invested by individual --}}
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Est. ROI</span></div>
        <div class="col  justify-content-end text-end"><span>{{-- amount --}}120,000,000</span></div>
        {{-- est roi, inatoka baada ya kufanya calculation  ((amount contributed/total contributed)*registered ROI)--}}
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Contract copy</span></div>
        <div class="col  justify-content-end text-end"><button class="rounded px-4" style="background-color: #0B9050; color:white">download</button></div>{{-- contract download link --}}
        </div>
        <hr>
    </div>
    <div class="m-3">
        <div><h5 class="text-muted ">Project manager notice</h5></div>
        <div class="rounded p-2" style="background-color: #F5F5F5 ">
            <p>{{ $ongoing->manager_notice }}</p>
        </div>
    </div>



</div>

@stop
