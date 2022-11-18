@extends('layouts.main')

@section('content')

{{-- link towards the previous page --}}
<div class="row">
    <div class="col-auto"><a href="{{ url()->previous() }}"><i class="bi bi-arrow-left-short" style="font-size: 40px; color:#0B9050"> </i></a></div>
    <div class="col"><h5 class="text-center pt-3 me-5" style="color:#0B9050 ">Investment verification</h5></div>
</div>

<div class="bg-white p-3"  style="">

    <div class="px-3 pt-4">
        <div class="row ">
        <div class="col"><span>Name</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $verify->name }}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Projected invested</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $verify->deposit_upload }}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Date of Deposit</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $verify->date_of_deposit }}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Date of filling</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $verify->created_at->format('j F,Y')}}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Amount invested</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $verify->amount_invested }}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Proof of Deposit</span></div>
        </div>

    </div>
    <div class="m-3 mt-2">
        <img src="{{ asset('FiledInvestment/'.$verify->deposit_upload) }}" alt="" class="img-fluid">
    </div>

    <div class="row">
        <div class="col ms-3"><a href="/onAccept" ><button class="btn btn-danger px-5" type="button">Decline</button></a></div>
        <div class="col text-end me-3"><form action="/onAccept/{{ $verify->id }}" method="POST">@csrf<button class="btn btn-success px-5" type="submit">Accept</button></form></div>
    </div>



</div>


@stop
