@extends('layouts.master')
@section('title' , 'Topics')

@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>{{ $post->topicname }}</h2>
        <ul class="nav pull-right panel_toolbox">
                            <li><i class="fa fa-comments-o fa-lg" aria-hidden="true">25</i>&nbsp;&nbsp;&nbsp;</li>
                            <li><i class="fa fa-eye fa-lg">50</i></li>
                        </ul> 
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="dashboard-widget-content">
    
    @if(count($post->tags))
      <ul>
        @foreach($post->tags as $tag)
          <li>
            {{-- <a href="/posts/tags {{ $tag->name }}"> --}}
              {{ $tag->name }}
            </a>
          </li>
        @endforeach
      </ul>
    @endif

  {{$post->description}} 
  

  <hr>

  <div class="comments">
    <ul class="list-group">
      @foreach ($post->comments as $comment)
      <li class="list-group-item">
        <strong>
          {{$comment->created_at->diffForHumans()}}: &nbsp;
        </strong>
        {{$comment->comments}}
      </li>
      @endforeach
    </ul>
  </div>

  <hr>

  <div class="card">
    <div class="card-block">
      <form method="POST" action="/posts/{{$post->id}}/comments">
          {{csrf_field()}}
        <div class="form-group">
          <textarea name="comments" placeholder="Your comment here." class="form-control"></textarea>
        </div>
        <div class = "form-group">
          <button type="submit" class="btn btn-primary">Add Comment</button>
        </div>
      </form>
      
      {{-- @include('sample.errors') --}}

    </div>
  </div>
  
</div>
@endsection