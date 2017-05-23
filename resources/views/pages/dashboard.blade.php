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
            <div class="col-md-8 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Recent Posts</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="dashboard-widget-content">

                    <ul class="list-unstyled timeline widget">
                      <li>
                        <div class="block">
                          <div class="block_content">
                            <h2 class="title">
                                              {{-- <a href="/posts{{ $post->id }}"> --}} {{-- {{$post->topicname}} --}}
                                          </h2>
                            <div class="byline">
                              <span>13 hours ago</span> by <a>{{ Auth::user()['firstname']. "  " .Auth::user()['lastname'] }}</a>
                            </div>
                            <p class="excerpt">{{-- {{ $post->topicname}} --}}<a>Read&nbsp;More</a>
                            </p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
@endsection
