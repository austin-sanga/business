@extends('layouts.main')

@section('content')

<h5 class="text-center" style="color:#0B9050 ">Withdraws</h5>

<div class="bg-white p-3"  style="height:85vh; position: relative;">
<div class="row">
    <div class="col">
        <span>Amount liquid in portfolio</span>
    </div>
    <div class="col text-end">
        <span>{{-- amount per user withdrawable from their account --}}230,000,000</span>
    </div>
</div>
<hr>

{{-- the actual withdrawal form --}}
<div>
    <form action="">
        <label for="withdraw">Amount to withdraw:</label><br>
        <input type="text" class="rounded"><br>
        {{-- <button type="submit" class="btn btn-success"  style="position: absolute; bottom:0px">File withdraw request</button> --}}


</div>
<div > <button class="btn btn-lg btn-success mb-3"  style="position: absolute; bottom:0px; ">File withdraw request</button></div>
</form>
</div>

@stop
