@extends('layouts.master')
@section('title' , 'Topics')

@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Recent Posts</h2>
        <ul class="nav pull-right panel_toolbox">
                            <li><i class="fa fa-comments-o fa-lg" aria-hidden="true">25</i>&nbsp;&nbsp;&nbsp;</li>
                            <li><i class="fa fa-eye fa-lg">50</i></li>
                        </ul> 
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="dashboard-widget-content">

          <ul class="list-unstyled timeline widget">
            <li>
              <div class="block">
                <div class="block_content">
                  <h2 class="title">
                    <a>{{$post->topicname}}</a>
                  </h2>
                  <div class="byline">
                    <span>13 hours ago</span> by <a> {{ Auth::user()['firstname']. "  " .Auth::user()['lastname'] }}</a>
                  </div>
                  <p>{{ $post->topicname}}
                  </p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
