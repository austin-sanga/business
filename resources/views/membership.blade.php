@extends('layouts.main')

@section('content')

{{-- link towards the previous page --}}
<div class="row">
    <div class="col-auto"><a href="{{ url()->previous() }}"><i class="bi bi-arrow-left-short" style="font-size: 40px; color:#0B9050"> </i></a></div>
    <div class="col"><h5 class="text-center pt-3 me-5" style="color:#0B9050 ">Membership</h5></div>
</div>


<div class="{{-- col-md-6  --}}{{-- col-xl-3 --}} mb-4 mx-5">
    <a href="userrequests" class="text-decoration-none">{{-- link to the user requests --}}
    <div class="card shadow border-start-primary py-2" >
        <div class="card-body">
            <div class="row align-items-center no-gutters">
                <div class="col-auto">
                    <i class="bi bi-plus-square-fill" style="font-size: 40px; color:#0B9050"></i>
                </div>
                <div class="col me-2">
                    <div class=" fw-bold text-black text-xs mb-1 " {{-- style="color: #0B9050" --}}><span>User Requests</span></div>
                 </div>
            </div>
        </div>
    </div>
    </a>
</div>


<div class="container pt-4 bg-white" >
    <div class="px-3 ">
        <div class="row text-muted">
        <div class="col"><span>Name</span></div>
        <div class="col  justify-content-end text-end"><span>Position</span></div>
        </div>
        <hr>
    </div>

    {{-- below is the recuression for the members with positions --}}
    @foreach ($users as $item)
    <div class="px-3 ">
        <div class="row ">
        <div class="col"><span>{{ $item->first_name }} {{ $item->middle_name }} {{ $item->last_name }}</span></div>
        <div class="col  justify-content-end text-end">
    <span>
        @if ( $item->role==1)
            Admin
        @elseif ($item->role==2)
            Project Manager
        @elseif ($item->role==3)
            Member
        @endif
    </span>
    </div>
        </div>
        <hr>
    </div>
    @endforeach



</div>
@stop
