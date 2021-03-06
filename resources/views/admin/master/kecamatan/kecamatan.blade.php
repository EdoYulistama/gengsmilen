@extends('layout.main') 
@section('page-title', 'Objekwisata') 
@section('page-css')
<link rel="apple-touch-icon" href="{{asset('assets/images/apple-touch-icon.png')}}">
<link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

    <!-- tabel start -->
    
        <!-- plugin start -->    
    <link rel="stylesheet" href="{{asset('global/vendor/datatables.net-bs4/dataTables.bootstrap4.css')}}">
        <link rel="stylesheet" href="{{asset('global/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.css')}}">
        <link rel="stylesheet" href="{{asset('global/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.css')}}">
        <link rel="stylesheet" href="{{asset('global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.css')}}">
        <link rel="stylesheet" href="{{asset('global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.css')}}">
        <link rel="stylesheet" href="{{asset('global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.css')}}">
        <link rel="stylesheet" href="{{asset('global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.css')}}">
        <link rel="stylesheet" href="{{asset('global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.css')}}">
        <link rel="stylesheet" href="{{asset('assets/examples/css/tables/datatable.css')}}">
        <!-- plugin end -->

        <!-- font start -->
        <link rel="stylesheet" href="{{asset('global/fonts/font-awesome/font-awesome.css')}}">    
        <!-- font end -->

    <!-- tabel end -->
@endsection

@section('page-js')
<script src="{{asset('global/vendor/chartist/chartist.min.js')}}"></script>
<script src="{{asset('global/vendor/aspieprogress/jquery-asPieProgress.js')}}"></script>
<script src="{{asset('global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js')}}"></script>

    <!-- tabel start -->

    <!-- plugin start -->
    <script src="{{asset('global/vendor/datatables.net/jquery.dataTables.js')}}"></script>
        <script src="{{asset('global/vendor/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
        <script src="{{asset('global/vendor/datatables.net-fixedheader/dataTables.fixedHeader.js')}}"></script>
        <script src="{{asset('global/vendor/datatables.net-fixedcolumns/dataTables.fixedColumns.js')}}"></script>
        <script src="{{asset('global/vendor/datatables.net-rowgroup/dataTables.rowGroup.js')}}"></script>
        <script src="{{asset('global/vendor/datatables.net-scroller/dataTables.scroller.js')}}"></script>
        <script src="{{asset('global/vendor/datatables.net-responsive/dataTables.responsive.js')}}"></script>
        <script src="{{asset('global/vendor/datatables.net-responsive-bs4/responsive.bootstrap4.js')}}"></script>
        <script src="{{asset('global/vendor/datatables.net-buttons/dataTables.buttons.js')}}"></script>
        <script src="{{asset('global/vendor/datatables.net-buttons/buttons.html5.js')}}"></script>
        <script src="{{asset('global/vendor/datatables.net-buttons/buttons.flash.js')}}"></script>
        <script src="{{asset('global/vendor/datatables.net-buttons/buttons.print.js')}}"></script>
        <script src="{{asset('global/vendor/datatables.net-buttons/buttons.colVis.js')}}"></script>
        <script src="{{asset('global/vendor/datatables.net-buttons-bs4/buttons.bootstrap4.js')}}"></script>
        <script src="{{asset('global/vendor/asrange/jquery-asRange.min.js')}}"></script>
        <script src="{{asset('global/vendor/bootbox/bootbox.js')}}"></script>
    <!-- plugin end -->    

    <!-- tabel end -->

@endsection

@section('page-js-priority')
<script src="{{asset('global/js/Plugin/aspieprogress.js')}}"></script>
<script src="{{asset('assets/examples/js/dashboard/ecommerce.js')}}"></script>

    <!-- tabel start -->    
    <!-- page start -->    
    <script src="{{asset('global/js/Plugin/datatables.js')}}"></script>
    <script src="{{asset('assets/examples/js/tables/datatable.js')}}"></script>
    <!-- page end -->
    <!-- tabel end -->
@endsection

@section('content')
          <!-- Panel Table Add Row -->
          <div class="panel">
            <header class="panel-heading">
              <h3 class="panel-title">Data Kecamatan</h3>
            </header>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="mb-15">
                    <button id="addToTable" class="btn btn-outline btn-primary" type="button">
                      <i class="icon wb-plus" aria-hidden="true"></i> Add row
                    </button>
                  </div>
                </div>
              </div>
              {{-- <table id="table-voucher" class="table table-hover table-bordered dataTable table-striped w-full dtr-inline" style="width: 100%;"> --}}

              <table class="table table-bordered table-hover table-striped" cellspacing="0" id="exampleAddRow">
                <thead>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="gradeA">
                    <td>Trident</td>
                    <td>Internet Explorer 5.5</td>
                    <td>Win 95+</td>
                    <td class="actions">
                      <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
                      <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                        data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
                      <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                        data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                      <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                        data-toggle="tooltip" data-original-title="Remove"><i class="icon wb-trash" aria-hidden="true"></i></a>
                    </td>
                  </tr>
                  
                </tbody>
              </table>
            </div>
          </div>
          <!-- End Panel Table Add Row -->
  
            
         
      <!-- End Page -->
      @endsection
  