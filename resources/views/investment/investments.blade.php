@extends('layouts.main')

@section('content')

{{-- link towards the previous page --}}
<div class="row">
    <div class="col-auto"><a href="{{ url()->previous() }}"><i class="bi bi-arrow-left-short" style="font-size: 40px; color:#0B9050"> </i></a></div>
    <div class="col"><h5 class="text-center pt-3 me-5" style="color:#0B9050 ">Investments</h5></div>
</div>

<div class=" mb-4 mx-5">
    <div class="card shadow border-start-primary py-2" >
        <div class="dropdown">
        <div class="card-body " id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="row align-items-center no-gutters">
                <div class="col-auto">
                    <i class="bi bi-bank" style="font-size: 40px; color:black"></i>
                </div>
                <div class="col me-2">
                    <div class=" fw-bold text-black text-xs mb-1 "><span>Investment accounts</span></div>
                 </div>
                 <div class="col-auto">
                    <i class="bi bi-arrow-right-short" style="font-size: 40px; color:#0B9050"></i>
                </div>
            </div>
        </div>

            <ul class="dropdown-menu dropdown-menu-large" aria-labelledby="dropdownMenuButton1">
                <li>Projects: {{-- money  --}}20,000,000</li>
                <hr class="dropdown-divider">
                <li>Savings: {{-- savings account --}}20,000,000</li>
                <hr class="dropdown-divider">
                <li class="text"><a href="withdraw" class="text-decoration-none"> <button class=" btn btn-success">Withdraw</button></a></li>
              </ul>
    </div>
    </div>

</div>

{{-- start of the below part --}}

<div class="bg-white">

<div class="row mx-5">
    <div class="col">
        <a href="invest" class="text-decoration-none">
        <div class="card shadow" style="background-color: #F5F5F5">
            <div class="card-body text-center">
                <span class="fw-bold" style="color: #0B9050">INVEST</span>
            </div>
        </div>
        </a>
    </div>
    <div class="col">
        <a href="save" class="text-decoration-none">
        <div class="card shadow" style="background-color: #F5F5F5">
            <div class="card-body text-center">
                <span class="fw-bold" style="color: #0B9050">SAVE</span>
            </div>
        </div>
        </a>
    </div>
</div>

<div class="mx-5 mt-3">
<table class="table table-striped border caption-top">
    <caption>Open opportunities</caption>
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
        <td colspan="2" class="text-center"><a href="/viewmoreopenopportunity" style="color: #0B9050" > View more</a></td>
      </tr>
    </tbody>
  </table>
</div>

<div class="mx-5 mt-3">
    <table class="table table-striped border caption-top">
        <caption>Verification Status</caption>
        <thead>
          <tr>
            <th scope="col">Project</th>
            <th scope="col" class="text-end">Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($verify as $verify)
                    <tr>
                        <td>{{ $verify->name }}</td>
                        <td class="text-end">{{ $verify->status }}</td>
                    </tr>
                    @endforeach
          <tr>
            <td colspan="2" class="text-center"><a href="viewmorependingverification"  style="color: #0B9050" > View more</a></td>
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
                <td colspan="2" class="text-center"><a href="/viewmoreongoinginvestment" style="color: #0B9050" > View more</a></td>
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
                        <td class="text-end">{{ $matured->quantity_sum }}/=</td>
                    </tr>
                    @endforeach
                  <tr>
                    <td colspan="2" class="text-center"><a href="/viewmorematuredinvestment" style="color: #0B9050" > View more</a></td>
                  </tr>
                </tbody>
              </table>
            </div>

</div>


@stop
