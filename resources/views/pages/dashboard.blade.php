@extends('layouts.master')
@section('title' , 'Dashboard')

@section('content')
<div class="">
  <div class="row top_tiles">

    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-file-text"></i></div>
        <div class="count">{{ $totalposts }}</div>
        <h3>Topics</h3>
        <p>Lorem ipsum psdea itgum rixt.</p>
      </div>
    </div>

    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-comments-o"></i></div>
        <div class="count">{{ $totalcomments }}</div>
        <h3>Comments</h3>
        <p>Lorem ipsum psdea itgum rixt.</p>
      </div>
    </div>

    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-tags"></i></div>
        <div class="count">{{ $totaltags }}</div>
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
      <div class="x_title">
        <a href="/posts/{{ $post->id }}">
          <h2><b>{{ $post->topicname }}</b>
          </a>
          <small> by {{ $post->user->firstname." ".$post->user->lastname }}</small></h2>
          <ul class="nav pull-right panel_toolbox">
            <i class="fa fa-comments-o fa-lg green">25</i>&nbsp;&nbsp;&nbsp;
            <i class="fa fa-eye fa-lg green">50</i>
          </ul>             
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <div class="dashboard-widget-content">
            <ul class="list-unstyled timeline widget">
              <li>
                <div class="block">
                  <div class="block_content">
                    <p>{{ $post->description }}
                      <p class="pull-right"> Date Published: <i class="green">{{ $post->created_at->toFormattedDateString() }}</i></p>
                    </p>
                    <br>
                  </div>

                </div>
              </li>
            </ul>
          </div>
        </div>


        @endforeach
      </div>
    </div>
@endsection