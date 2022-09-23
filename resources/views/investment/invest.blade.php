@extends('layouts.main')

@section('content')

{{-- link towards the previous page --}}
<div class="row">
    <div class="col-auto"><a href="{{ url()->previous() }}"><i class="bi bi-arrow-left-short" style="font-size: 40px; color:#0B9050"> </i></a></div>
    <div class="col"><h5 class="text-center pt-3 me-5" style="color:#0B9050 ">Invest</h5></div>
</div>

<div class="bg-white p-3"  style="height:85vh; position: relative;">

    <div class="container justify-content-center">
        <form action="/FileInvestment" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="projectid">Fill project id:</label><br>
                <div class="row">
                    <div class="col">
                        <select class="form-select" aria-label="Default select example" name="project_id">
                        <option selected>Select Project</option>
                        @foreach ($list as $list)
                          <option value="{{ $list->id }}">{{ $list->name }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col"><i class="bi bi-journal-text ms-3" style="font-size: 30px"></i></div>
                </div>
            </div>
            <div class="mb-3 col-5">
                <label for="projectid" class="mb-2">Amount invested:</label><br>
                <input type="text" class="form-control" name="amount_invested">
            </div>
            <div class="mb-3 col-5">
                <label for="projectid" class="mb-2">Date of deposit:</label><br>
                <input type="date" class="form-control" name="date_of_deposit">
            </div>
            <div class="mb-3 col-10">
                <label for="projectid" class="mb-2">Proof of deposit:</label><br>
                <input class="form-control " id="formFileLg" type="file" name="deposit_upload"/>
            </div>
            <button class="btn btn-lg btn-success mb-3"  style="position: absolute; bottom:10px;" type="submit">File Investment</button>

        </form>
    </div>

@stop
