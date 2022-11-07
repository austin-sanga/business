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
        <div class="display-6 fw-bold "><span>{{ $project->name }}</span></div>
    </div>


    <form action="/maturityDataSave" method="POST">
            @csrf
            {{-- you have to pass the id but you out it hidden --}}
     <input type="hidden" name="id" value='{{ $project->id }}'>
        <div class="mb-3">
            <div><label for="ROI">ROI:</label></div>
            <div><input type="text" class="form-control w-50" name="roi"></div>
        </div>
        <div>
            <div><label for="Dateofmaturity">Date of Maturity:</label></div>
            <div><input type="date" class="form-control w-50 " name="date_of_maturity"></div>
        </div>
        <div >
            <button class="btn btn-lg btn-success mb-3 px-5"  style="position: absolute; bottom:0px; " type="submit">File Maturity</button>
        </div>
    </form>
</div>

@stop

