@extends('layouts.main')

@section('content')

{{-- link towards the previous page --}}
<div class="row">
    <div class="col-auto"><a href="/investments"><i class="bi bi-arrow-left-short" style="font-size: 40px; color:#0B9050"> </i></a></div>
    <div class="col"><h5 class="text-center pt-3 me-5" style="color:#0B9050 ">Open opportunity</h5></div>
</div>




<div class="container pt-4 bg-white" >
    <div class="px-3 ">
        <div class="row text-muted">
        <div class="col"><span>Name</span></div>
        <div class="col  justify-content-end text-end"><span>Budget</span></div>
        </div>
        <hr>
    </div>

    {{-- below is the recuression for the matured investments --}}
    <div class="px-3 ">
        @foreach ($moreopen as $moreopen)
        <a href="openopportunity/{{ $moreopen->id }}">
        <div class="row ">
        <div class="col"><span>{{ $moreopen->name }}</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $moreopen->budget}}</span></div>
        </div>
        </a>
        <hr>
        @endforeach
    </div>


</div>
@stop
