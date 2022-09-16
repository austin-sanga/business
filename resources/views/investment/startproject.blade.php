@extends('layouts.main')

@section('content')

{{-- link towards the previous page --}}
<div class="row">
    <div class="col-auto"><a href="{{ url()->previous() }}"><i class="bi bi-arrow-left-short" style="font-size: 40px; color:#0B9050"> </i></a></div>
    <div class="col"><h5 class="text-center pt-3 me-5" style="color:#0B9050 ">Start project</h5></div>
</div>

<div class="bg-white p-3"  style="height:85vh; position: relative;">

    <div class="container justify-content-center">
        <form action="/storeContract" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- you have to pass the id but you out it hidden --}}
            <input type="hidden" name="id" value='{{ $old->id }}'>

            <div class="mb-3">
                <label for="projectid" class="mb-2">Upload contract:</label><br>
                <input type="file" class="form-control form-control" id="formFileLg"  name="project_contract" style="width: 350px"/>
                <span>File size not to exceed 2 mb.</span>

                @error('project_contract')
                <div class="error text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-lg btn-success mb-3"  style="position: absolute; bottom:10px;">Start Project</button>

        </form>
    </div>


@stop
