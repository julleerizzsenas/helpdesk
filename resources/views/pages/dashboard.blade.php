@extends('layouts.master')
@section('title' , 'Dashboard')

@section('content')
    <div class="">
      <div class="row top_tiles">

        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-file-text"></i></div>
            <div class="count">179</div>
            <h3> 
            <a href="/topics">Topics</h3>
            <p>Lorem ipsum psdea itgum rixt.</p>
          </div>
        </div>

        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-comments-o"></i></div>
            <div class="count">179</div>
            <h3>Comments</h3>
            <p>Lorem ipsum psdea itgum rixt.</p>
          </div>
        </div>

        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-tags"></i></div>
            <div class="count">179</div>
            <h3>Tags</h3>
            <p>Lorem ipsum psdea itgum rixt.</p>
          </div>
        </div>

        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-line-chart"></i></div>
            <div class="count">179</div>
            <h3>Views</h3>
            <p>Lorem ipsum psdea itgum rixt.</p>
          </div>
        </div>

      </div>
    </div>
</form>

<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                @foreach ($posts as $post)
                  @include ('layouts.home_show')
                @endforeach
              </div>
            </div>
@endsection
