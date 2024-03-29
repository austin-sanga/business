@extends('layouts.main')

@section('content')

{{-- link towards the previous page --}}
<div class="row">
    <div class="col-auto"><a href="/investments"><i class="bi bi-arrow-left-short" style="font-size: 40px; color:#0B9050"> </i></a></div>
    <div class="col"><h5 class="text-center pt-3 me-5" style="color:#0B9050 ">Verification Status</h5></div>
</div>




<div class="container pt-4 bg-white" >
    <div class="px-3 ">
        <div class="row text-muted">
        <div class="col"><span>Name</span></div>
        <div class="col  justify-content-end text-end"><span>Status</span></div>
        </div>
        <hr>
    </div>

    {{-- below is the recuression for the pending verifications investments --}}
    <div class="px-3 ">
        @foreach ($moreverify as $moreverify)
        <a href="verificationstatus/{{ $moreverify->fid }}">
        <div class="row ">
        <div class="col"><span>{{ $moreverify->name }}</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $moreverify->status}}</span></div>
        </div>
        </a>
        <hr>
        @endforeach
    </div>


</div>
@stop
