@extends('layouts.main')

@section('content')

{{-- link towards the previous page --}}
<div class="row">
    <div class="col-auto"><a href="{{ url()->previous() }}"><i class="bi bi-arrow-left-short" style="font-size: 40px; color:#0B9050"> </i></a></div>
    <div class="col"><h5 class="text-center pt-3 me-5" style="color:#0B9050 ">Maturity file</h5></div>
</div>

<div class="bg-white p-3"  style="height:85vh; position: relative;">
    <div class="mb-4">
        <div><label for="projectname">Project Name:</label></div>
        <div class="display-6 fw-bold "><span>Mt kuliomn</span></div>
    </div>

        <form action="">
    <div class="mb-3">
        <div><label for="ROI">ROI:</label></div>
        <div><input type="text" class="rounded"></div>
    </div>
    <div>
        <div><label for="Dateofmaturity">Date of Maturity:</label></div>
        <div><input type="text" class="rounded"></div>
    </div>
    <div >
        <button class="btn btn-lg btn-success mb-3 px-5"  style="position: absolute; bottom:0px; ">File Maturity</button>
    </div>
        </form>
</div>

@stop

