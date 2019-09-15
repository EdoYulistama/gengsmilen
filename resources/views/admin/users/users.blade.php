@extends('layout.main') 
@section('page-title', 'Objekwisata') 
@section('page-css')
<link rel="apple-touch-icon" href="{{asset('assets/images/apple-touch-icon.png')}}">
<link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

    <!-- tabel start -->
    
        <!-- plugin start -->    
        <link rel="stylesheet" href="{{asset('assets/examples/css/tables/basic.css')}}">
        <!-- plugin end -->

    <!-- tabel end -->
@endsection

@section('page-js')
<script src="{{asset('global/vendor/chartist/chartist.min.js')}}"></script>
<script src="{{asset('global/vendor/aspieprogress/jquery-asPieProgress.js')}}"></script>
<script src="{{asset('global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js')}}"></script>

    <!-- tabel start -->

    <!-- plugin start -->
    <script src="../../../global/vendor/peity/jquery.peity.min.js"></script>
    <!-- plugin end -->    

    <!-- tabel end -->

@endsection

@section('page-js-priority')
<script src="{{asset('global/js/Plugin/aspieprogress.js')}}"></script>
<script src="{{asset('assets/examples/js/dashboard/ecommerce.js')}}"></script>

    <!-- tabel start -->    
    <!-- page start -->    
    <script src="{{asset('global/js/Plugin/peity.js')}}"></script>
        <script src="{{asset('global/js/Plugin/asselectable.js')}}"></script>
        <script src="{{asset('global/js/Plugin/selectable.js')}}"></script>
        <script src="{{asset('global/js/Plugin/table.js')}}"></script>
        <script src="{{asset('global/js/Plugin/asscrollable.js')}}"></script>
    
        <script src="{{asset('assets/examples/js/charts/peity.js')}}"></script>
    <!-- page end -->
    <!-- tabel end -->
@endsection

@section('content')
          <!-- Panel -->
        <div class="panel">
            <div class="panel-body">
              <div class="row">
                <div class="col-md-12">
                  <!-- Example Basic -->
                  <div class="example-wrap">
                    <h4 class="example-title">Data Users</h4>
                    <div class="example table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>Teagan</td>
                            <td>Prohaska</td>
                            <td>@Elijah</td>
                            <td>
                              <span class="badge badge-danger">admin</span>
                            </td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>Andy</td>
                            <td>Gaylord</td>
                            <td>@Ramiro</td>
                            <td>
                              <span class="badge badge-info">member</span>
                            </td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>Veronica</td>
                            <td>Gusikowski</td>
                            <td>@Maxime</td>
                            <td>
                              <span class="badge badge-warning">developer</span>
                            </td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td>Bruce</td>
                            <td>Rogahn</td>
                            <td>@Maggio</td>
                            <td>
                              <span class="badge badge-success">supporter</span>
                            </td>
                          </tr>
                          <tr>
                            <td>5</td>
                            <td>Carolina</td>
                            <td>Hickle</td>
                            <td>@Hammes</td>
                            <td>
                              <span class="badge badge-info">member</span>
                            </td>
                          </tr>
                          <tr>
                            <td>6</td>
                            <td>Madaline</td>
                            <td>Eichmann</td>
                            <td>@Amaya</td>
                            <td>
                              <span class="badge badge-success">supporter</span>
                            </td>
                        </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- End Example Basic -->
                </div>
              </div>
            </div>
        </div>
  
      <!-- End Page -->
      @endsection
  