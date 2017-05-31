@extends('layouts.master')
@section('title' , 'Dashboard')

@section('content')

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
            <i class="fa fa-comments-o fa-lg green">{{$post->comments->count()}}</i>&nbsp;&nbsp;&nbsp;
            <i class="fa fa-eye fa-lg green">{{$post->tags->count()}}</i>
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
  </div>
@endsection
