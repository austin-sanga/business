@extends('layouts.main')

@section('content')

{{-- link towards the previous page --}}
<div class="row">
    <div class="col-auto"><a href="/viewmorepublishedprojects"><i class="bi bi-arrow-left-short" style="font-size: 40px; color:#0B9050"> </i></a></div>
    <div class="col"><h5 class="text-center pt-3 me-5" style="color:#0B9050 ">Published project</h5></div>
</div>

<div class="bg-white p-3"  {{-- style="height:73vh;" --}}>

    <div class="px-3 pt-4">
        <div class="row ">
        <div class="col"><span>Name</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $old->projectName}}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>est.Start date</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $old->est_start_date}}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>est.Duration</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $old->est_duration}}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Budget</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $old->budget}}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Est. ROI</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $old->est_roi}}</span></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>project manager</span></div>
        <div class="col  justify-content-end text-end"><span>{{ $old->fname}} {{ $old->mname}} {{ $old->lname}}</span> </div>
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
        <div class="col-4 text-start ps-4">
            <a href="/deletepublished/{{$old->id }}"><button class="btn btn-danger px-5" type="button">Delete</button></a>
        </div>
        <div class="col-4 text-end pe-3 ">
            <a href="/editpublishedproject/{{$old->id }}"><button class="btn btn-warning px-5" type="submit">Edit</button></a>
        </div>
    </div>

</div>

<div class="text-center mt-3">
    <a href="/startproject/{{$old->id }}"><button class="btn btn-success px-5">Start Project</button></a>
</div>

@stop
