@extends('layouts.main')

@section('content')

<h5 class="text-center" style="color:#0B9050 ">Investments</h5>

<div class="{{-- col-md-6  --}}{{-- col-xl-3 --}} mb-4 mx-5">
    <a href="ministatement" class="text-decoration-none">{{-- link to the mini-statement --}}
    <div class="card shadow border-start-primary py-2" >
        <div class="card-body">
            <div class="row align-items-center no-gutters">
                <div class="col-auto">
                    <i class="bi bi-journals" style="font-size: 40px; color:black"></i>
                </div>
                <div class="col me-2">
                    <div class=" fw-bold text-black text-xs mb-1 " {{-- style="color: #0B9050" --}}><span>Investment accounts</span></div>
                 </div>
                 <div class="col-auto">
                    <i class="bi bi-arrow-right-short" style="font-size: 40px; color:#0B9050"></i>
                </div>
            </div>
        </div>
    </div>
    </a>
</div>


@stop
