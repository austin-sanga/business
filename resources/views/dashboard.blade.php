@extends('layouts.main')

@section('content')
{{-- <div class="container justify-content-center"> --}}

    {{-- first link towards the portfoliO amount --}}
<div class="{{-- col-md-6  --}}{{-- col-xl-3 --}} mb-4 mx-5">
    <div class="card shadow border-start-primary py-2" >
        <div class="card-body">
            <div class="row align-items-center no-gutters">
                <div class="col me-2">
                    <div class="text-uppercase text-black fw-bold text-xs mb-1"><span>Portfolio Amount</span></div>
                    <div class="text-dark fw-bold h5 mb-0 blur"><span>$40,000</span></div>
                </div>
                <div class="col-auto">
                    <div class="form-switch form-check ">
                    <input class="form-check-input mx-2 pe-3" style="transform: scale(1.9);"   type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- second link towards a ministatement --}}
<div class="{{-- col-md-6  --}}{{-- col-xl-3 --}} mb-4 mx-5">
    <div class="card shadow border-start-primary py-2" >
        <div class="card-body">
            <div class="row align-items-center no-gutters">
                <div class="col-auto">
                    <i class="bi bi-arrow-right-short" style="font-size: 40px; color:#0B9050"></i>
                </div>
                <div class="col me-2">
                    <div class=" fw-bold text-black text-xs mb-1 " {{-- style="color: #0B9050" --}}><span>Mini Statement</span></div>
                 </div>
                <div class="col-auto">
                    <div class="form-switch form-check ">
                    <input class="form-check-input mx-2 pe-3" style="transform: scale(1.9);"   type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- </div> --}}



@stop
{{-- <form action="/logout" method="POST">
@csrf
<a href="/logout" onclick="event.preventDefault();this.closest('form').submit();"> Logout </a>
</form> --}}

