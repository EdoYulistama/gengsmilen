@extends('layout.main') 
@section('page-title', 'Pengunjung') 
@section('page-css')
{{-- <link rel="stylesheet" href="{{config('s3.cloudFrontUrl')}}office/assets/examples/css/dashboard/v1.css"> --}}
<link rel="apple-touch-icon" href="{{asset('assets/images/apple-touch-icon.png')}}">
<link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
@endsection

@section('page-js')
{{-- <script src="{{config('s3.cloudFrontUrl')}}office/global/vendor/matchheight/jquery.matchHeight-min.js"></script>
<script src="{{config('s3.cloudFrontUrl')}}office/global/vendor/peity/jquery.peity.min.js"></script> --}}

<script src="{{asset('global/vendor/chartist/chartist.min.js')}}"></script>
<script src="{{asset('global/vendor/aspieprogress/jquery-asPieProgress.js')}}"></script>
<script src="{{asset('global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js')}}"></script>
@endsection

@section('page-js-priority')
{{-- <script src="{{config('s3.cloudFrontUrl')}}office/global/js/Plugin/matchheight.js"></script>
<script src="{{config('s3.cloudFrontUrl')}}office/global/js/Plugin/peity.js"></script>
<script src="{{config('s3.cloudFrontUrl')}}office/assets/examples/js/dashboard/v1.js"></script> --}}

<script src="{{asset('global/js/Plugin/aspieprogress.js')}}"></script>
<script src="{{asset('assets/examples/js/dashboard/ecommerce.js')}}"></script>
@endsection

@section('content')
<!-- Page -->
{{-- <div class="page-header">
        <h1 class="page-title font-size-26 font-weight-100">Ecommerce Overview</h1>
        </div> --}}
  
        {{-- <div class="page-content container-fluid"> --}}
          <div class="row">
            <!-- First Row -->
            <div class="col-xl-3 col-md-6 info-panel">
              <div class="card card-shadow">
                <div class="card-block bg-white p-20">
                  <button type="button" class="btn btn-floating btn-sm btn-warning">
                    <i class="icon wb-shopping-cart"></i>
                  </button>
                  <span class="ml-15 font-weight-400">ORDERS</span>
                  <div class="content-text text-center mb-0">
                    <i class="text-danger icon wb-triangle-up font-size-20">
                </i>
                    <span class="font-size-40 font-weight-100">399</span>
                    <p class="blue-grey-400 font-weight-100 m-0">+45% From previous month</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 info-panel">
              <div class="card card-shadow">
                <div class="card-block bg-white p-20">
                  <button type="button" class="btn btn-floating btn-sm btn-danger">
                    <i class="icon fa-dollar"></i>
                  </button>
                  <span class="ml-15 font-weight-400">INCOM</span>
                  <div class="content-text text-center mb-0">
                    <i class="text-success icon wb-triangle-down font-size-20">
                </i>
                    <span class="font-size-40 font-weight-100">$18,628</span>
                    <p class="blue-grey-400 font-weight-100 m-0">+45% From previous month</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 info-panel">
              <div class="card card-shadow">
                <div class="card-block bg-white p-20">
                  <button type="button" class="btn btn-floating btn-sm btn-success">
                    <i class="icon wb-eye"></i>
                  </button>
                  <span class="ml-15 font-weight-400">VISITORS</span>
                  <div class="content-text text-center mb-0">
                    <i class="text-danger icon wb-triangle-up font-size-20">
                </i>
                    <span class="font-size-40 font-weight-100">23,456</span>
                    <p class="blue-grey-400 font-weight-100 m-0">+25% From previous month</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 info-panel">
              <div class="card card-shadow">
                <div class="card-block bg-white p-20">
                  <button type="button" class="btn btn-floating btn-sm btn-primary">
                    <i class="icon wb-user"></i>
                  </button>
                  <span class="ml-15 font-weight-400">CUSTOMERS</span>
                  <div class="content-text text-center mb-0">
                    <i class="text-danger icon wb-triangle-up font-size-20">
                </i>
                    <span class="font-size-40 font-weight-100">4,367</span>
                    <p class="blue-grey-400 font-weight-100 m-0">+25% From previous month</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End First Row -->
  
            <!-- second Row -->
            <div class="col-12" id="ecommerceChartView">
              <div class="card card-shadow">
                <div class="card-header card-header-transparent py-20">
                  <div class="btn-group dropdown">
                    <a href="#" class="text-body dropdown-toggle blue-grey-700" data-toggle="dropdown">PRODUCTS SALES</a>
                    <div class="dropdown-menu animate" role="menu">
                      <a class="dropdown-item" href="#" role="menuitem">Sales</a>
                      <a class="dropdown-item" href="#" role="menuitem">Total sales</a>
                      <a class="dropdown-item" href="#" role="menuitem">profit</a>
                    </div>
                  </div>
                  <ul class="nav nav-pills nav-pills-rounded chart-action">
                    <li class="nav-item"><a class="active nav-link" data-toggle="tab" href="#scoreLineToDay">Day</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToWeek">Week</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToMonth">Month</a></li>
                  </ul>
                </div>
                <div class="widget-content tab-content bg-white p-20">
                  <div class="ct-chart tab-pane active" id="scoreLineToDay"></div>
                  <div class="ct-chart tab-pane" id="scoreLineToWeek"></div>
                  <div class="ct-chart tab-pane" id="scoreLineToMonth"></div>
                </div>
              </div>
            </div>
            <!-- End Second Row -->
  
            
          </div>
        </div>
      <!-- End Page -->
      @endsection
  