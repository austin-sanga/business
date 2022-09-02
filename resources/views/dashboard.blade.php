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
                    <div class="text-dark fw-bold h5 mb-0"><span>$40,000{{-- change as from database --}}</span></div>
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
    <a href="ministatement" class="text-decoration-none">{{-- link to the mini-statement --}}
    <div class="card shadow border-start-primary py-2" >
        <div class="card-body">
            <div class="row align-items-center no-gutters">
                <div class="col-auto">
                    <i class="bi bi-journals" style="font-size: 40px; color:black"></i>
                </div>
                <div class="col me-2">
                    <div class=" fw-bold text-black text-xs mb-1 " {{-- style="color: #0B9050" --}}><span>Mini Statement</span></div>
                 </div>
                 <div class="col-auto">
                    <i class="bi bi-arrow-right-short" style="font-size: 40px; color:#0B9050"></i>
                </div>
            </div>
        </div>
    </div>
    </a>
</div>

<div class="text-center gutter-2">
    <h2 class="text-center">Where will you work today?</h2>
    {{-- <div class="row ">
        <div class="col ms-5">
            <a href="investments" class="text-decoration-none">
            <div class="card bg-white mx-3">
            <div><i class="bi bi-currency-dollar" style="font-size:40px; color:#0B9050"></i></div>
            <div><span style="color: black">Investments</span>
            </div>
            </div>
            </a>
        </div>

        <div class="col me-5">
            <a href="loans" class="text-decoration-none">
            <div class="card bg-white mx-3">
            <div><i class="bi bi-cash-coin" style="font-size:40px; color:#0B9050"></i></div>
            <div><span style="color: black">Loans</span>
            </div>
            </div>
            </a>
        </div>
    </div> --}}

    {{-- perform a role check to perform task --}}
    @if (Auth::user()->role==1)
    <h2>chiken</h2>
    @else
    @include('layouts.includes.managerworks')
    @endif

</div>

<div class="m-5">
    <div><h4 class="text-muted ">Discover</h4></div>
    <div class="bg-white rounded p-2">
        <h4>{{-- title --}} Lorem, ipsum dolor.</h4>
        <p>{{-- paragraph of content --}} Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel ducimus quos, vero minima sint culpa dolores eligendi omnis ut iste magnam reiciendis dicta inventore quam aut non. Odit distinctio, debitis cumque alias nulla, sunt sint sed nihil, cum a molestias magni architecto consequatur autem provident quaerat reiciendis rerum. Facere odit magnam est doloremque minima eaque minus dicta deserunt debitis optio?</p>
    </div>
</div>

{{-- </div> --}}



@stop
{{-- <form action="/logout" method="POST">
@csrf
<a href="/logout" onclick="event.preventDefault();this.closest('form').submit();"> Logout </a>
</form> --}}

