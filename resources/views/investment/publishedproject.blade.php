@extends('layouts.main')

@section('content')

{{-- link towards the previous page --}}
<div class="row">
    <div class="col-auto"><a href="{{ url()->previous() }}"><i class="bi bi-arrow-left-short" style="font-size: 40px; color:#0B9050"> </i></a></div>
    <div class="col"><h5 class="text-center pt-3 me-5" style="color:#0B9050 ">Published project</h5></div>
</div>

<div class="bg-white p-3"  style="height:73vh;">

    <div class="px-3 pt-4">
        <div class="row ">
        <div class="col"><span>Name</span></div>
        <div class="col  justify-content-end text-end"><input type="email" class="form-control" id="inputEmail3"></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>est.Start date</span></div>
        <div class="col  justify-content-end text-end"><input type="email" class="form-control" id="inputEmail3"></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>est.Duration</span></div>
        <div class="col  justify-content-end text-end"><input type="email" class="form-control" id="inputEmail3"></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Budget</span></div>
        <div class="col  justify-content-end text-end"><input type="email" class="form-control" id="inputEmail3"></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>Est. ROI</span></div>
        <div class="col  justify-content-end text-end"><input type="email" class="form-control" id="inputEmail3"></div>
        </div>
        <hr>
    </div>
    <div class="px-3">
        <div class="row ">
        <div class="col"><span>project manager</span></div>
        <div class="col  justify-content-end text-end">
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected>Open this select menu</option>
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
        <div class="form-floating">
            <textarea class="form-control bg-color:black" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Comments</label>
          </div>
    </div>

    <div class="row justify-content">
        <div class="col-4 text-start ps-4"><button class="btn btn-danger px-5" type="button">Cancel</button></div>
        <div class="col-4 text-center ps-4"><button class="btn btn-warning px-5">Edit</button></div>
        <div class="col-4 text-end pe-3 "><button class="btn btn-success px-5" type="submit">Publish</button></div>
    </div>

</div>

<div class="text-center mt-3">
    <button class="btn btn-success px-5">Start Project</button>
</div>

@stop
