@extends('layouts.main')

@section('content')

{{-- link towards the previous page --}}
<div class="row">
    <div class="col-auto"><a href="/dashboard"><i class="bi bi-arrow-left-short" style="font-size: 40px; color:#0B9050"> </i></a></div>
    <div class="col"><h5 class="text-center pt-3 me-5" style="color:#0B9050 ">Project Manager</h5></div>
</div>

@if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('status') }}
      </div>
    @endif

<div class="mb-4 mx-5">
    <a href="newproject" class="text-decoration-none">{{-- link to the user requests --}}
    <div class="card shadow border-start-primary py-2" >
        <div class="card-body">
            <div class="row align-items-center no-gutters">
                <div class="col-auto">
                    <i class="bi bi-plus-square-fill" style="font-size: 40px; color:#0B9050"></i>
                </div>
                <div class="col me-2">
                    <div class=" fw-bold text-black text-xs mb-1 " {{-- style="color: #0B9050" --}}><span>New project</span></div>
                 </div>
            </div>
        </div>
    </div>
    </a>
</div>

{{-- start of the below part --}}

<div class="bg-white">

<div class="mx-5 mt-3">
<table class="table table-striped border caption-top">
    <caption>Published projects</caption>
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col" class="text-end">Budget</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($published as $published)
        <tr>
            <td>{{ $published->name }}</td>
            <td class="text-end">{{ $published->budget }}/=</td>
        </tr>
        @endforeach
      <tr>
        <td colspan="2" class="text-center"><a href="viewmorepublishedprojects" style="color: #0B9050" > View more</a></td>
      </tr>
    </tbody>
  </table>
</div>

<div class="mx-5 mt-3">
    <table class="table table-striped border caption-top">
        <caption>Verification queue</caption>
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col" class="text-end">Invested {{ $test }}</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($verify as $verify)
            <tr>
                <td>{{ $verify->first_name }} {{ $verify->middle_name }} {{ $verify->last_name }}</td>
                <td class="text-end">{{ $verify->amount_invested }}/=</td>
            </tr>
            @endforeach
          <tr>
            <td colspan="2" class="text-center"><a href="viewmoreverificationqueue"  style="color: #0B9050" > View more</a></td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="mx-5 mt-3">
        <table class="table table-striped border caption-top">
            <caption>Ongoing Investments</caption>
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col" class="text-end">Invested</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($ongoing as $ongoing)
            <tr>
                <td>{{ $ongoing->name }}</td>
                <td class="text-end">{{ $ongoing->budget }}/=</td>
            </tr>
            @endforeach
              <tr>
                <td colspan="2" class="text-center"><a href="viewmoremanagerongoinginvestment" style="color: #0B9050" > View more</a></td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="mx-5 mt-3">
            <table class="table table-striped border caption-top">
                <caption>Matured Investments</caption>
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col" class="text-end">Invested</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($matured as $matured)
                <tr>
                <td>{{ $matured->name }}</td>
                <td class="text-end">{{ $matured->budget }}/=</td>
                </tr>
                     @endforeach
                  <tr>
                    <td colspan="2" class="text-center"><a href="viewmoreadminmaturedinvestment" style="color: #0B9050" > View more</a></td>
                  </tr>
                </tbody>
              </table>
            </div>

</div>


@stop
