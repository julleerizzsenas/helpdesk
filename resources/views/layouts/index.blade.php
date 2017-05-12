@extends('layouts.master')

@section('title' , 'Home')


@section('content')
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Helpdesk</span></a>
          </div>

          <!-- sidebar menu -->
          <div class="container">
            <div class="row">
              @include('layouts.sidebar')
            </div>
          </div> 
          <!-- /sidebar menu -->    

        </div>
      </div>


      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          @include('layouts.top_nav')
        </div>
      </div>
      <!-- /top navigation -->


      <!-- page content -->
      <div class="right_col" role="main">
        <div class="row tile_count">
          <div class="jumbotron text-center">
            <h1>Welcome!</h1>
          </div>
        </div>
        <!-- /top tiles -->
        <br />
      </div>
    </div>
    <!-- /page content -->
@endsection

