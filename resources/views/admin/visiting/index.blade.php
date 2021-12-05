@extends('admin.layouts.app')

@section('nav_title','Visiting Create')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Visitings</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Visitings</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    @if(session()->has('success'))
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Success!</h5>
                {{ session()->get('success') }}
              </div>
        </div>
    </div>
    @endif
<!-- Main content -->

<div class="container">
  <div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-9">
                <h3 class="card-title">Visitings</strong></h3>
            </div>
            <div class="col-md-3">
                {{-- <form action="{{ route('admin.visiting.index') }}" method="GET">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="date" class="form-control" name="date">
                        </div>
                        <div class="col-md-6">
                            <input class="btn btn-info" type="submit" value="Go">
                        </div>
                    </div>
                </form> --}}
            </div>
      </div>
    </div>
    <div class="card-body">
        <table id="invoiceTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    {{-- <th>No</th> --}}
                    <th>Visiting Date</th>
                    <th>Customer Name</th>
                    <th>Contact No</th>
                    <th>Address</th>
                </thead>
                
                <tfoot>
                {{-- <tr>
                  <th>No</th>
                    <th>Visiting Date</th>
                    <th>Customer Name</th>
                    <th>Contact No</th>
                    <th>Address</th>
                </tr>
                </tfoot> --}}
        </table>
        <input type="button" id="printButton" class="btn btn-info" onclick="printDiv('invoiceTablePrint')" value="print" />
        <table id="invoiceTablePrint" class="table table-bordered table-striped" style="display: none">
            <thead>
                <tr>
                    {{-- <th>No</th> --}}
                    <th>Visiting Date</th>
                    <th>Customer Name</th>
                    <th>Contact No</th>
                    <th>Address</th>
                </thead>
                <tbody>
                    @foreach ($visitings as $item)
                        <tr>
                            <td>{{$item->site_visit_date}}</td>
                            <td>{{$item->first_name}} {{$item->last_name}}</td>
                            <td>{{$item->contact_no}}</td>
                            <td>{{$item->user_address}}</td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
</div>
</div>
</div>
@endsection


@section('extra_js')
    <script>
      $('#invoiceTable').DataTable({
            processing: true,
            serverSide: true,
            paging: false,
            // scrollY: 425,
            ajax:{
                url: "{{ route('admin.visiting.index') }}",
            },
            columns:[
                {
                    data: 'visiting_date',
                    name: 'visiting_date'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'contact_no',
                    name: 'contact_no'
                },
                {
                    data: 'user_address',
                    name: 'user_address'
                }
            ]
        });
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.getElementById("printButton").style.display = "none";
            // document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
@endsection
