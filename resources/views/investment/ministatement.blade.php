@extends('layouts.main')

@section('content')

<h5 class="text-center" style="color:#0B9050 ">Mini Statement</h5>

<div class="container bg-white">
    {{-- after this is where the loop should be appearing --}}
    @foreach ($statements as $statements)
        <div class="px-3">
        <h6>{{ $statements->date_of_deposit }}</h6>
        <div class="row">
        <div class="col"><span>Invested on {{ $statements->name }}</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $statements->amount_invested }} TZS</span></div>
        </div>
        <hr>
    </div>
    @endforeach


</div>

@stop
