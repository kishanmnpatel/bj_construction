@extends('admin.layouts.app')

@section('nav_title','Invoice Create')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Invoice Create</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item">Invoice</li>
              <li class="breadcrumb-item active">Create</li>
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
    <form action="{{route('admin.invoice.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Contact No</label>
                    <input type="text" class="form-control @error('mobile') is-invalid @enderror" placeholder="Name" name="name" value="" required autofocus>
                    <input type="hidden" name="user_id" value="2">
                </div>
                <div class="form-group">
                    <label>Customer Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Customer Name" name="name" value="" required>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" placeholder="Address" name="address" autocomplete="false">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Quotation No</label>
                    <input type="text" class="form-control @error('quotation_no') is-invalid @enderror" placeholder="Quotation No" name="quotation_no" value="" required autofocus>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12">
            <div class="card card-primary card-outline card-tabs">
              <div class="card-header p-0 pt-1 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Toilet</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Toilet Fulljob</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-messages-tab" data-toggle="pill" href="#custom-tabs-three-messages" role="tab" aria-controls="custom-tabs-three-messages" aria-selected="false">Waste Water</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-settings-tab" data-toggle="pill" href="#custom-tabs-three-settings" role="tab" aria-controls="custom-tabs-three-settings" aria-selected="false">Waste Water Fulljob</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-three-tabContent">
                  <div class="tab-pane fade active show" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                    <div class="col-12 table-responsive">
                        <div class="row">
                            <div class="col-md-3">
                                00. For How Many Peoples
                            </div>
                            <div class="col-md-1">
                                <input type="text" name="toilet[0][quantity]" value="" placeholder="For how many peoples">
                                <input style="width: 40px" type="hidden" name="toilet[0][length]" value="0"> 
                                <input style="width: 40px" type="hidden" name="toilet[0][width]" value="0"> 
                                <input style="width: 40px" type="hidden" name="toilet[0][height]" value="0">
                                <input style="width: 40px" type="hidden" name="toilet[0][unit_price]" value="0"> 
                                <input style="width: 40px" type="hidden" name="toilet[0][total]" value="0">
                            </div>
                        </div>
                        <br>
                        <table class="table table-striped">
                          <thead>
                          <tr>
                            <th>No</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Total</th>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td>01</td>
                            <td>Size of Parawewa <br>
                                <div class="row">
                                    <input style="width: 40px" type="text" name="toilet[1][length]" value="15"> &nbsp;X &nbsp;
                                    <input style="width: 40px" type="text" name="toilet[1][width]" value="10"> &nbsp;X&nbsp; 
                                    <input style="width: 40px" type="text" name="toilet[1][height]" value="25">
                                </div>
                            </td>
                            <td><input type="text" name="toilet[1][quantity]" placeholder="Quantity"></td>
                            <td><input type="text" name="toilet[1][unit_price]" placeholder="Unit Price"></td>
                            <td><input type="text" name="toilet[1][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                            <td>02</td>
                            <td>Transport Cost</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="toilet[2][length]" value=""> 
                                <input style="width: 40px" type="hidden" name="toilet[2][width]" value=""> 
                                <input style="width: 40px" type="hidden" name="toilet[2][height]" value="">
                            </div>
                            <td><input type="text" name="toilet[2][quantity]" placeholder="Quantity"></td>
                            <td><input type="text" name="toilet[2][unit_price]" placeholder="Unit Price"></td>
                            <td><input type="text" name="toilet[2][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                            <td>03</td>
                            <td>_______________________</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="toilet[3][length]" value=""> 
                                <input style="width: 40px" type="hidden" name="toilet[3][width]" value=""> 
                                <input style="width: 40px" type="hidden" name="toilet[3][height]" value="">
                            </div>
                            <td><input type="text" name="toilet[3][quantity]" placeholder="Quantity"></td>
                            <td><input type="text" name="toilet[3][unit_price]" placeholder="Unit Price"></td>
                            <td><input type="text" name="toilet[3][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                            <td>04</td>
                            <td>_______________________</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="toilet[4][length]" value=""> 
                                <input style="width: 40px" type="hidden" name="toilet[4][width]" value=""> 
                                <input style="width: 40px" type="hidden" name="toilet[4][height]" value="">
                            </div>
                            <td><input type="text" name="toilet[4][quantity]" placeholder="Quantity"></td>
                            <td><input type="text" name="toilet[4][unit_price]" placeholder="Unit Price"></td>
                            <td><input type="text" name="toilet[4][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                              <td colspan="4"></td>
                              <td><div id="toilet_total">0/-</div></td>
                          </tr>
                          </tbody>
                        </table>
                      </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                    <div class="col-12 table-responsive">
                        <div class="row">
                            <div class="col-md-3">
                                00. For How Many Peoples
                            </div>
                            <div class="col-md-1">
                                <input type="text" name="toilet_fulljob[0][quantity]" value="" placeholder="For how many peoples">
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[0][length]" value="0"> 
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[0][width]" value="0"> 
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[0][height]" value="0">
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[0][unit_price]" value="0"> 
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[0][total]" value="0">
                            </div>
                        </div>
                        <br>
                        <table class="table table-striped">
                          <thead>
                          <tr>
                            <th>No</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Total</th>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td>01</td>
                            <td>Capacity of the squre <br>
                                <div class="row">
                                    <input style="width: 40px" type="text" name="toilet_fulljob[1][length]" value="15"> &nbsp;X &nbsp;
                                    <input style="width: 40px" type="text" name="toilet_fulljob[1][width]" value="10"> &nbsp;X&nbsp; 
                                    <input style="width: 40px" type="text" name="toilet_fulljob[1][height]" value="25">
                                </div>
                            </td>
                            <td><input type="text" name="toilet_fulljob[1][quantity]" placeholder="Quantity"></td>
                            <td><input type="text" name="toilet_fulljob[1][unit_price]" placeholder="Unit Price"></td>
                            <td><input type="text" name="toilet_fulljob[1][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                            <td>02</td>
                            <td>Soil transport</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[2][length]" value=""> 
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[2][width]" value="">
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[2][height]" value="">
                            </div>
                            <td><input type="text" name="toilet_fulljob[2][quantity]" placeholder="Quantity"></td>
                            <td><input type="text" name="toilet_fulljob[2][unit_price]" placeholder="Unit Price"></td>
                            <td><input type="text" name="toilet_fulljob[2][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                            <td>03</td>
                            <td>Size of parawewa <br>
                                <div class="row">
                                    <input style="width: 40px" type="text" name="toilet_fulljob[3][length]" value="15"> &nbsp;X &nbsp;
                                    <input style="width: 40px" type="text" name="toilet_fulljob[3][width]" value="10"> &nbsp;X&nbsp; 
                                    <input style="width: 40px" type="text" name="toilet_fulljob[3][height]" value="25">
                                </div>
                            </td>
                            <td><input type="text" name="toilet_fulljob[3][quantity]" placeholder="Quantity"></td>
                            <td><input type="text" name="toilet_fulljob[3][unit_price]" placeholder="Unit Price"></td>
                            <td><input type="text" name="toilet_fulljob[3][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                            <td>04</td>
                            <td>4" PVC pipe</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[4][length]" value=""> 
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[4][width]" value="">  
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[4][height]" value="">
                            </div>
                            <td><input type="text" name="toilet_fulljob[4][quantity]" placeholder="Quantity"></td>
                            <td><input type="text" name="toilet_fulljob[4][unit_price]" placeholder="Unit Price"></td>
                            <td><input type="text" name="toilet_fulljob[4][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                            <td>05</td>
                            <td>1.5" PVC vent piple</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[5][length]" value=""> 
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[5][width]" value="">  
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[5][height]" value="">
                            </div>
                            <td><input type="text" name="toilet_fulljob[5][quantity]" placeholder="Quantity"></td>
                            <td><input type="text" name="toilet_fulljob[5][unit_price]" placeholder="Unit Price"></td>
                            <td><input type="text" name="toilet_fulljob[5][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                            <td>06</td>
                            <td>2 * 2 Man hole</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[6][length]" value=""> 
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[6][width]" value="">  
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[6][height]" value="">
                            </div>
                            <td><input type="text" name="toilet_fulljob[6][quantity]" placeholder="Quantity"></td>
                            <td><input type="text" name="toilet_fulljob[6][unit_price]" placeholder="Unit Price"></td>
                            <td><input type="text" name="toilet_fulljob[6][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                            <td>07</td>
                            <td>6" C/C Concretewith 10mm steel</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[7][length]" value=""> 
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[7][width]" value="">  
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[7][height]" value="">
                            </div>
                            <td><input type="text" name="toilet_fulljob[7][quantity]" placeholder="Quantity"></td>
                            <td><input type="text" name="toilet_fulljob[7][unit_price]" placeholder="Unit Price"></td>
                            <td><input type="text" name="toilet_fulljob[7][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                            <td>08</td>
                            <td>Transportation Cost</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[8][length]" value=""> 
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[8][width]" value="">  
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[8][height]" value="">
                            </div>
                            <td><input type="text" name="toilet_fulljob[8][quantity]" placeholder="Quantity"></td>
                            <td><input type="text" name="toilet_fulljob[8][unit_price]" placeholder="Unit Price"></td>
                            <td><input type="text" name="toilet_fulljob[8][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                            <td>09</td>
                            <td>_______________________</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[9][length]" value=""> 
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[9][width]" value="">  
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[9][height]" value="">
                            </div>
                            <td><input type="text" name="toilet_fulljob[9][quantity]" placeholder="Quantity"></td>
                            <td><input type="text" name="toilet_fulljob[9][unit_price]" placeholder="Unit Price"></td>
                            <td><input type="text" name="toilet_fulljob[9][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                            <td>10</td>
                            <td>_______________________</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[10][length]" value=""> 
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[10][width]" value="">  
                                <input style="width: 40px" type="hidden" name="toilet_fulljob[10][height]" value="">
                            </div>
                            <td><input type="text" name="toilet_fulljob[10][quantity]" placeholder="Quantity"></td>
                            <td><input type="text" name="toilet_fulljob[10][unit_price]" placeholder="Unit Price"></td>
                            <td><input type="text" name="toilet_fulljob[10][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                              <td colspan="4"></td>
                              <td><div id="toilet_total">0/-</div></td>
                          </tr>
                          </tbody>
                        </table>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-messages" role="tabpanel" aria-labelledby="custom-tabs-three-messages-tab">
                    <div class="col-12 table-responsive">
                        <div class="row">
                            <div class="col-md-3">
                                00. For How Many Peoples
                            </div>
                            <div class="col-md-1">
                                <input type="text" name="waste_water[0][quantity]" value="" placeholder="For how many peoples">
                                <input style="width: 40px" type="hidden" name="waste_water[0][length]" value="0"> 
                                <input style="width: 40px" type="hidden" name="waste_water[0][width]" value="0"> 
                                <input style="width: 40px" type="hidden" name="waste_water[0][height]" value="0">
                                <input style="width: 40px" type="hidden" name="waste_water[0][unit_price]" value="0"> 
                                <input style="width: 40px" type="hidden" name="waste_water[0][total]" value="0">
                            </div>
                        </div>
                        <br>
                        <table class="table table-striped">
                          <thead>
                          <tr>
                            <th>No</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Total</th>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td>01</td>
                            <td>Size of grees tap <br>
                                <div class="row">
                                    <input style="width: 40px" type="text" name="waste_water[1][length]" value="15"> &nbsp;X &nbsp;
                                    <input style="width: 40px" type="text" name="waste_water[1][width]" value="10"> &nbsp;X&nbsp; 
                                    <input style="width: 40px" type="text" name="waste_water[1][height]" value="25">
                                </div>
                            </td>
                            <td><input type="text" name="waste_water[1][quantity]" placeholder="Quantity"></td>
                            <td><input type="text" name="waste_water[1][unit_price]" placeholder="Unit Price"></td>
                            <td><input type="text" name="waste_water[1][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                            <td>02</td>
                            <td>Sand filter</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="waste_water[2][length]" value=""> 
                                <input style="width: 40px" type="hidden" name="waste_water[2][width]" value="">  
                                <input style="width: 40px" type="hidden" name="waste_water[2][height]" value="">
                            </div>
                            <td><input type="text" name="waste_water[2][quantity]" placeholder="Quantity"></td>
                            <td><input type="text" name="waste_water[2][unit_price]" placeholder="Unit Price"></td>
                            <td><input type="text" name="waste_water[2][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                            <td>03</td>
                            <td>Size of Parawewa <br>
                                <div class="row">
                                    <input style="width: 40px" type="text" name="waste_water[3][length]" value="15"> &nbsp;X &nbsp;
                                    <input style="width: 40px" type="text" name="waste_water[3][width]" value="10"> &nbsp;X&nbsp; 
                                    <input style="width: 40px" type="text" name="waste_water[3][height]" value="25">
                                </div>
                            </td>
                            <td><input type="text" name="waste_water[3][quantity]" placeholder="Quantity"></td>
                            <td><input type="text" name="waste_water[3][unit_price]" placeholder="Unit Price"></td>
                            <td><input type="text" name="waste_water[3][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                            <td>04</td>
                            <td>Transport Cost</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="waste_water[4][length]" value=""> 
                                <input style="width: 40px" type="hidden" name="waste_water[4][width]" value=""> 
                                <input style="width: 40px" type="hidden" name="waste_water[4][height]" value="">
                            </div>
                            <td><input type="text" name="waste_water[4][quantity]" placeholder="Quantity"></td>
                            <td><input type="text" name="waste_water[4][unit_price]" placeholder="Unit Price"></td>
                            <td><input type="text" name="waste_water[4][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                            <td>05</td>
                            <td>_______________________</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="waste_water[5][length]" value=""> 
                                <input style="width: 40px" type="hidden" name="waste_water[5][width]" value=""> 
                                <input style="width: 40px" type="hidden" name="waste_water[5][height]" value="">
                            </div>
                            <td><input type="text" name="waste_water[5][quantity]" placeholder="Quantity"></td>
                            <td><input type="text" name="waste_water[5][unit_price]" placeholder="Unit Price"></td>
                            <td><input type="text" name="waste_water[5][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                            <td>06</td>
                            <td>_______________________</td>
                            <div class="row">
                                <input style="width: 60px" type="hidden" name="waste_water[6][length]" value=""> 
                                <input style="width: 60px" type="hidden" name="waste_water[6][width]" value=""> 
                                <input style="width: 60px" type="hidden" name="waste_water[6][height]" value="">
                            </div>
                            <td><input type="text" name="waste_water[6][quantity]" placeholder="Quantity"></td>
                            <td><input type="text" name="waste_water[6][unit_price]" placeholder="Unit Price"></td>
                            <td><input type="text" name="waste_water[6][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                              <td colspan="4"></td>
                              <td><div id="toilet_total">0/-</div></td>
                          </tr>
                          </tbody>
                        </table>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-settings" role="tabpanel" aria-labelledby="custom-tabs-three-settings-tab">
                    <div class="col-12 table-responsive">
                        <div class="row">
                            <div class="col-md-3">
                                00. For How Many Peoples
                            </div>
                            <div class="col-md-1">
                                <input type="text" name="waste_water_fulljob[0][quantity]" value="" placeholder="For how many peoples">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[0][length]" value="0"> 
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[0][width]" value="0"> 
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[0][height]" value="0">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[0][unit_price]" value="0"> 
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[0][total]" value="0">
                            </div>
                        </div>
                        <br>
                        <table class="table table-striped">
                          <thead>
                          <tr>
                            <th>No</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Total</th>
                          </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>01</td>
                                <td>Capacity of the squre <br>
                                    <div class="row">
                                        <input style="width: 40px" type="text" name="waste_water_fulljob[1][length]" value="15"> &nbsp;X &nbsp;
                                        <input style="width: 40px" type="text" name="waste_water_fulljob[1][width]" value="10"> &nbsp;X&nbsp; 
                                        <input style="width: 40px" type="text" name="waste_water_fulljob[1][height]" value="25">
                                    </div>
                                </td>
                                <td><input type="text" name="waste_water_fulljob[1][quantity]" placeholder="Quantity"></td>
                                <td><input type="text" name="waste_water_fulljob[1][unit_price]" placeholder="Unit Price"></td>
                                <td><input type="text" name="waste_water_fulljob[1][total]" placeholder="Total"></td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td>Size of grees tap <br>
                                    <div class="row">
                                        <input style="width: 40px" type="text" name="waste_water_fulljob[2][length]" value="15"> &nbsp;X &nbsp;
                                        <input style="width: 40px" type="text" name="waste_water_fulljob[2][width]" value="10"> &nbsp;X&nbsp; 
                                        <input style="width: 40px" type="text" name="waste_water_fulljob[2][height]" value="25">
                                    </div>
                                </td>
                                <td><input type="text" name="waste_water_fulljob[2][quantity]" placeholder="Quantity"></td>
                                <td><input type="text" name="waste_water_fulljob[2][unit_price]" placeholder="Unit Price"></td>
                                <td><input type="text" name="waste_water_fulljob[2][total]" placeholder="Total"></td>
                            </tr>
                            <tr>
                            <td>03</td>
                            <td>Size of Parawewa & Sand filter<br>
                                <div class="row">
                                    <input style="width: 40px" type="text" name="waste_water_fulljob[3][length]" value="15"> &nbsp;X &nbsp;
                                    <input style="width: 40px" type="text" name="waste_water_fulljob[3][width]" value="10"> &nbsp;X&nbsp; 
                                    <input style="width: 40px" type="text" name="waste_water_fulljob[3][height]" value="25">
                                </div>
                            </td>
                            <td><input type="text" name="waste_water_fulljob[3][quantity]" placeholder="Quantity"></td>
                            <td><input type="text" name="waste_water_fulljob[3][unit_price]" placeholder="Unit Price"></td>
                            <td><input type="text" name="waste_water_fulljob[3][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td>Sand filter for waste water</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[4][length]" value="">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[4][width]" value=""> 
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[4][height]" value="">
                            </div>
                            <td><input type="text" name="waste_water_fulljob[4][quantity]" placeholder="Quantity"></td>
                            <td><input type="text" name="waste_water_fulljob[4][unit_price]" placeholder="Unit Price"></td>
                            <td><input type="text" name="waste_water_fulljob[4][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                            <td>5</td>
                            <td>Parawewa for waste water</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[5][length]" value="">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[5][width]" value=""> 
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[5][height]" value="">
                            </div>
                            <td><input type="text" name="waste_water_fulljob[5][quantity]" placeholder="Quantity"></td>
                            <td><input type="text" name="waste_water_fulljob[5][unit_price]" placeholder="Unit Price"></td>
                            <td><input type="text" name="waste_water_fulljob[5][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                            <td>6</td>
                            <td>Soil transpotation</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[6][length]" value="">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[6][width]" value=""> 
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[6][height]" value="">
                            </div>
                            <td><input type="text" name="waste_water_fulljob[6][quantity]" placeholder="Quantity"></td>
                            <td><input type="text" name="waste_water_fulljob[6][unit_price]" placeholder="Unit Price"></td>
                            <td><input type="text" name="waste_water_fulljob[6][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                            <td>7</td>
                            <td>2" PVC piple</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[7][length]" value="">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[7][width]" value=""> 
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[7][height]" value="">
                            </div>
                            <td><input type="text" name="waste_water_fulljob[7][quantity]" placeholder="Quantity"></td>
                            <td><input type="text" name="waste_water_fulljob[7][unit_price]" placeholder="Unit Price"></td>
                            <td><input type="text" name="waste_water_fulljob[7][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                            <td>8</td>
                            <td>2' * 2" Man hole</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[8][length]" value="">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[8][width]" value=""> 
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[8][height]" value="">
                            </div>
                            <td><input type="text" name="waste_water_fulljob[8][quantity]" placeholder="Quantity"></td>
                            <td><input type="text" name="waste_water_fulljob[8][unit_price]" placeholder="Unit Price"></td>
                            <td><input type="text" name="waste_water_fulljob[8][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                            <td>9</td>
                            <td>1.6' * 1.6' Meal Cover Seal</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[9][length]" value="">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[9][width]" value=""> 
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[9][height]" value="">
                            </div>
                            <td><input type="text" name="waste_water_fulljob[9][quantity]" placeholder="Quantity"></td>
                            <td><input type="text" name="waste_water_fulljob[9][unit_price]" placeholder="Unit Price"></td>
                            <td><input type="text" name="waste_water_fulljob[9][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                            <td>10</td>
                            <td>Sand Filter Metal Cover</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[10][length]" value="">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[10][width]" value=""> 
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[10][height]" value="">
                            </div>
                            <td><input type="text" name="waste_water_fulljob[10][quantity]" placeholder="Quantity"></td>
                            <td><input type="text" name="waste_water_fulljob[10][unit_price]" placeholder="Unit Price"></td>
                            <td><input type="text" name="waste_water_fulljob[10][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                            <td>11</td>
                            <td>Transport Cost</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[11][length]" value="">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[11][width]" value=""> 
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[11][height]" value="">
                            </div>
                            <td><input type="text" name="waste_water_fulljob[11][quantity]" placeholder="Quantity"></td>
                            <td><input type="text" name="waste_water_fulljob[11][unit_price]" placeholder="Unit Price"></td>
                            <td><input type="text" name="waste_water_fulljob[11][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                            <td>12</td>
                            <td>_______________________</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[12][length]" value="">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[12][width]" value=""> 
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[12][height]" value="">
                            </div>
                            <td><input type="text" name="waste_water_fulljob[12][quantity]" placeholder="Quantity"></td>
                            <td><input type="text" name="waste_water_fulljob[12][unit_price]" placeholder="Unit Price"></td>
                            <td><input type="text" name="waste_water_fulljob[12][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                            <td>13</td>
                            <td>_______________________</td>
                            <div class="row">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[13][length]" value="">
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[13][width]" value=""> 
                                <input style="width: 40px" type="hidden" name="waste_water_fulljob[13][height]" value="">
                            </div>
                            <td><input type="text" name="waste_water_fulljob[13][quantity]" placeholder="Quantity"></td>
                            <td><input type="text" name="waste_water_fulljob[13][unit_price]" placeholder="Unit Price"></td>
                            <td><input type="text" name="waste_water_fulljob[13][total]" placeholder="Total"></td>
                          </tr>
                          <tr>
                              <td colspan="4"></td>
                              <td><div id="toilet_total">0/-</div></td>
                          </tr>
                          </tbody>
                        </table>
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
        </div>
        <div class="form-group">
            <label for=""></label>
            <button type="submit" class="form-control btn-primary">Save & Print</button>
        </div>
    </form>
</div>
</div>
@endsection
