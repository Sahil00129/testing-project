<!DOCTYPE html>
<html lang="en">
 <!-- START: Head-->
 <head>
 <title>@yield('title','') | ESR </title>
@include('includes.header')

 </head>
    <!-- END Head-->
     <!-- START: Body-->
     <body id="main-container" class="default horizontal-menu">

<!-- START: Pre Loader-->
<div class="se-pre-con">
    <div class="loader"></div>
</div>
<!-- END: Pre Loader-->
<!-- START: Header-->
<div id="header-fix" class="header fixed-top">
  
@include('includes.navbar')

 <!-- START: Main Content-->
 <main>
            <div class="container-fluid site-width">

            @yield('content')
            </div>
        </main>
        <!-- END: Content-->
        @include('includes.footer')
    
        </body>
    <!-- END: Body-->
</html>

