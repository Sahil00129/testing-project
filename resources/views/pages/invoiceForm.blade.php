@extends('layouts.main')
@section('title', 'Dashboard')
@section('content')

 <!-- START: Breadcrumbs-->
 <div class="row ">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">Basic Form</h4></div>

                            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item">Form</li>
                                <li class="breadcrumb-item active"><a href="#">Basic</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END: Breadcrumbs-->

                <!-- START: Card Data-->
                <div class="row">
                    <div class="col-12 mt-4">
                        <div class="card">
                            <div class="card-header">                               
                                <h6 class="card-title">Form Inputs</h6>                                
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">                                           
                                        <div class="col-12">
                                            <form id="create_invoice" >
                                                <div class="form-row" method="post">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputEmail4">Client Name</label>
                                                        <input type="text" class="form-control rounded" id="validationCustom01" name="client_name"  required>
                                                    </div>
                                                
                                                    <div class="form-group col-md-6">
                                                        <label for="inputPassword4">Invoice Date</label>
                                                        <input type="date" class="form-control" id="" name="invoice_date"  required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputEmail4">Invoice Number</label>
                                                        <input type="text" class="form-control rounded" id="validationCustom01" name="invoice_number"  required>
                                                    </div>
                                                
                                                    <div class="form-group col-md-6">
                                                        <label for="inputPassword4">Amount</label>
                                                        <input type="text" class="form-control" id="email" name="amount" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputEmail4">Due Date</label>
                                                        <input type="date" class="form-control rounded" id="validationCustom01" name="due_date"  required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputEmail4">Due Date</label>
                                                        <input type="email" class="form-control rounded" id="validationCustom01" name="email"  required>
                                                    </div>
                                                    <div class="form-group col-md-6">                                                       
                                                        <input type="text" class="form-control" id="email" name="status" style="display: none;" value="0">
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Create</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Card DATA-->

@endsection