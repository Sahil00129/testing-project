@extends('layouts.main')
@section('title', 'Dashboard')
@section('content')
 <!-- START: Breadcrumbs-->
 <?php
//echo'<pre>'; print_r($data); die;
 ?>
 <div class="row ">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">Datatable</h4></div>

                            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item">Table</li>
                                <li class="breadcrumb-item active"><a href="#">Datatable</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END: Breadcrumbs-->

                <!-- START: Card Data-->
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="card">
                            <div class="card-header  justify-content-between align-items-center">                               
                                <h4 class="card-title">Data Tabel</h4> 
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="first-table" class="display table dataTable table-striped table-bordered" >
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Address 1</th>
                                                <th>Address 2</th>
                                                <th>City</th>
                                                <th>State</th>
                                                <th>Zip</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <?php
                                          //$sa = json_encode($data);
                                          
                                           ?>
                                        @foreach($data as $value)
                                        <?php
                                          //echo'<pre>'; print_r($value); die;
                                          $sa = json_decode($value->address);
                                          //echo'<pre>'; print_r($sa); die;
                                           ?>
                                        <tbody>
                                            <tr>
                                               <td>{{$value->name}}</td>
                                               <td>{{$value->email}}</td>
                                               <td>{{$sa->address1}}</td>
                                               <td>{{$sa->address2}}</td>
                                               <td>{{$sa->city}}</td>
                                               <td>{{$sa->state}}</td>
                                               <td>{{$sa->zip}}</td>
                                               <td>{{$value->date}}</td>
                                            </tr>
                                            
                                        </tbody>
                                        @endforeach
                                        <tfoot>
                                            <tr>
                                            <th>Name</th>
                                                <th>Email</th>
                                                <th>Address 1</th>
                                                <th>Address 2</th>
                                                <th>City</th>
                                                <th>State</th>
                                                <th>Zip</th>
                                                <th>Date</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div> 

                    </div>                  
                </div>
                <!-- END: Card DATA-->
@endsection