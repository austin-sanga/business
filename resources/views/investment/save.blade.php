@extends('layouts.main')

@section('content')

{{-- link towards the previous page --}}
<div class="row">
    <div class="col-auto"><a href="{{ url()->previous() }}"><i class="bi bi-arrow-left-short" style="font-size: 40px; color:#0B9050"> </i></a></div>
    <div class="col"><h5 class="text-center pt-3 me-5" style="color:#0B9050 ">Save</h5></div>
</div>

<div class="bg-white p-3"  style="height:85vh; position: relative;">

    <div class="container justify-content-center">
        <form action="">
            <div class="mb-3 col-5">
                <label for="projectid">Saving bucket id:</label><br>
                <div class="row">
                    <div class="col">
                <input type="text" class="form-control">
                    </div>
                    <div class="col"><i class="bi bi-journal-text ms-3" style="font-size: 30px"></i>
                    </div>
                </div>
            </div>
            <div class="mb-3 col-5">
                <label for="projectid" class="mb-2">Amount deposited:</label><br>
                <input type="text" class="form-control">
            </div>
            <div class="mb-3 col-5">
                <label for="projectid" class="mb-2">Date of deposit:</label><br>
                <input type="text" class="form-control">
            </div>
            <div class="mb-3 col-10">
                <label for="projectid" class="mb-2">Proof of deposit:</label><br>
                <input class="form-control" id="formFileLg" type="file"  />
            </div>
            <button class="btn btn-lg btn-success mb-3"  style="position: absolute; bottom:10px; ; ">File Savings</button>

        </form>
    </div>

    {{-- left:100px --}}
@stop
