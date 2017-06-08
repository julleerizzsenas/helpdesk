@extends('layouts.master')
@section('title' , 'Topics')

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

        @endforeach
        {{ $posts->links() }}
      </div>

    </div>
  </div>
@endsection
