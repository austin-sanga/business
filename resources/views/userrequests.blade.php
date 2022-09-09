@extends('layouts.main')

@section('content')

{{-- link towards the previous page --}}
<div class="row">
    <div class="col-auto"><a href="membership"><i class="bi bi-arrow-left-short" style="font-size: 40px; color:#0B9050"> </i></a></div>
    <div class="col"><h5 class="text-center pt-3 me-5" style="color:#0B9050 ">User Requests</h5></div>
</div>


@if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('status') }}
      </div>
    @endif

<div class="container pt-4 bg-white" >
    <div class="px-3 ">
        <div class="row text-muted">
        <div class="col"><span>Name</span></div>
        <div class="col  justify-content-end text-end"><span>Request date</span></div>
        </div>
        <hr>
    </div>

    {{-- below is the recuression for the member requests --}}
    @foreach ($users as $item)
    <div class="px-3 ">
        <a href="specificrequest/{{ $item->id }}" class="text-decoration-none">
        <div class="row text-black">
        <div class="col "><span>{{ $item->first_name }} {{ $item->middle_name }} {{ $item->last_name }}</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $item->created_at->format('d/m/Y') }}</span></div>
        </div>
        </a>
        <hr>
    </div>
    @endforeach

</div>
@stop
