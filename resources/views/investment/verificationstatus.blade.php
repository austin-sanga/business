@extends('layouts.main')

@section('content')

{{-- link towards the previous page --}}
<div class="row">
    <div class="col-auto"><a href="{{ url()->previous() }}"><i class="bi bi-arrow-left-short" style="font-size: 40px; color:#0B9050"> </i></a></div>
    <div class="col"><h5 class="text-center pt-3 me-5" style="color:#0B9050 ">Verification Status</h5></div>
</div>

<div class="bg-white p-3"  style="height:85vh;">

    <div class="px-3">
        <div class="row text-muted">
        <div class="col"><span>ID: {{ $verify->project_id}}</span></div>
        <div class="col  justify-content-end text-end"><span>Status: {{ $verify->status}}</span></div>
        </div>
    </div>
    <div class="px-3 pt-3">
        <div class="row ">
        <div class="col"><span>Name</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $verify->name}}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Date of deposit</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $verify->date_of_deposit}}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Date of filling</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $verify->created_at->format('j F, Y')}}</span></div>
        </div>
        <hr>
    </div>
    {{-- <div class="px-3">
        <div class="row ">
        <div class="col"><span>Type of filling</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $verify->date_of_deposit}}</span></div>
        </div>
        <hr>
    </div> --}}
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Amount deposited</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $formatted_money( $verify->amount_invested) }}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Project manager</span></div>
        <div class="col  justify-content-end text-end"><span>#{{ $verify->id}}- {{ $verify->first_name}} {{ $verify->middle_name}} {{ $verify->last_name}}</span></div>
        </div>
        <hr>
    </div>
    <div class="m-3">
        <div><h5 class="text-muted ">Project manager notice</h5></div>
        <div class="rounded p-2" style="background-color: #F5F5F5 ">
            <p>{{ $verify->manager_notice}}</p>
        </div>
    </div>


</div>

@stop
