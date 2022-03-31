@extends('layouts.main')
@section('title', 'Dashboard')
@section('content')

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<link type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet"> 
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<style>
.kbw-signature{
    width: 40%;
    height: 100px;
    border: 1px solid #000;
}
#sign canvas{
    width: 100% !important;
    height: auto;
}
    </style>
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
                                            <form id="first_form" class="needs-validation" novalidate>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputEmail4">Name</label>
                                                        <input type="text" class="form-control rounded" id="validationCustom01" name="name" placeholder="Email" required>
                                                    </div>
                                                    <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputPassword4">Email</label>
                                                        <input type="email" class="form-control" id="email" name="email" placeholder="Password" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputAddress">Address</label>
                                                    <input type="text" class="form-control" id="address_1" name="address_1" placeholder="1234 Main St">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputAddress2">Address 2</label>
                                                    <input type="text" class="form-control" id="address_2" name="address_2" placeholder="Apartment, studio, or floor">
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputCity">City</label>
                                                        <input type="text" class="form-control" id="City" name="city">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputState">State</label>
                                                        <select id="inputState" class="form-control" name="state">
                                                            <option selected>Choose...</option>
                                                            <option value="punjab">punjab</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="inputZip">Zip</label>
                                                        <input type="text" class="form-control" id="inputZip" name="zip">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputDate">Date</label>
                                                        <input type="date" class="form-control datepicker" id="inputDate" name="date">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                       <div id="signaturePad"></div>
                                                       <textarea id="signature64" name="signed" style="display: none;"></textarea>
                                                       <button id="clear">clear</button>
                                                    </div>
                                                </div>

                                                <button type="submit" class="btn btn-primary">Sign in</button>
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