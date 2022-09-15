@extends('layouts.main')

@section('content')

{{-- link towards the previous page --}}
<div class="row">
    <div class="col-auto"><a href="{{ url()->previous() }}"><i class="bi bi-arrow-left-short" style="font-size: 40px; color:#0B9050"> </i></a></div>
    <div class="col"><h5 class="text-center pt-3 me-5" style="color:#0B9050 ">Edit published project</h5></div>
</div>

<div class="bg-white p-3"  style="height:73vh;">

    <div class="px-3 pt-4">
        <div class="row ">
        <div class="col"><span>Name</span></div>
        <div class="col  justify-content-end text-end"><input type="email" class="form-control" id="inputEmail3" value="{{ $old->name }}"></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>est.Start date</span></div>
        <div class="col  justify-content-end text-end"><input type="email" class="form-control" id="inputEmail3" value="{{ $old->est_start_date }}"></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>est.Duration</span></div>
        <div class="col  justify-content-end text-end"><input type="email" class="form-control" id="inputEmail3" value="{{ $old->est_duration }}"></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Budget</span></div>
        <div class="col  justify-content-end text-end"><input type="email" class="form-control" id="inputEmail3" value="{{ $old->budget }}"></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Est. ROI</span></div>
        <div class="col  justify-content-end text-end"><input type="email" class="form-control" id="inputEmail3" value="{{ $old->est_roi }}"></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>project manager</span></div>
        <div class="col  justify-content-end text-end">
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected value="{{ $old->user_id }}">{{ $old->user_id }}</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
        </div>
        </div>
        <hr>
    </div>
    <div class="m-3 mt-5">
        <div><h5 class="text-muted ">Project manager notice</h5></div>
        <div class="rounded p-2" style="background-color: #F5F5F5 ">
            <p>{{ $old->manager_notice}}</p>
        </div>
    </div>

    <div class="row justify-content-around">
        <div class="col-4 text-start ps-4"><button class="btn btn-danger px-5" type="button">Cancel</button></div>
        <div class="col-4 text-center ps-4"><button class="btn btn-warning px-5">Save</button></div>
    </div>

</div>


@stop
