@extends('layouts.master')
@section('title' , 'Dashboard')

@section('content')
<form method = "POST" action = "/dashboard">
  {{csrf_field() }}
  <div class="right_col" role="main">
      <div class="row top_tiles">
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
            <div class="count">179</div>
            <h3>New Sign ups</h3>
            <p>Lorem ipsum psdea itgum rixt.</p>
          </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-comments-o"></i></div>
            <div class="count">179</div>
            <h3>New Sign ups</h3>
            <p>Lorem ipsum psdea itgum rixt.</p>
          </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
            <div class="count">179</div>
            <h3>New Sign ups</h3>
            <p>Lorem ipsum psdea itgum rixt.</p>
          </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-check-square-o"></i></div>
            <div class="count">179</div>
            <h3>New Sign ups</h3>
            <p>Lorem ipsum psdea itgum rixt.</p>
          </div>
        </div>
      </div>
  </form>
  @endsection
