@extends('layouts.master')
@section('title' , 'Topics')

@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2><b>{{ $post->topicname }}</b>
          <small>by {{ $post->user->firstname." ".$post->user->lastname }}
          </small>
        </h2>
        <ul class="nav pull-right panel_toolbox">
          <li>{{$post->created_at->diffForHumans()}} &nbsp;</li>
          <li><i class="fa fa-comments-o fa-lg" aria-hidden="true">{{$tcomments}}</i>&nbsp;&nbsp;&nbsp;</li>
          <li><i class="fa fa-eye fa-lg">{{$ttags}}</i></li>
        </ul> 
        <div class="clearfix"></div>
      </div>

      <div class="x_content">
        <div class="dashboard-widget-content">
          {{$post->description}} 

          <hr>

          @if(count($post->tags))
          <ul class="menu ul">
            @foreach($post->tags as $tag)
            <i class="fa fa-tag"></i>
            <li class="menu li">
              <a href="/posts/tags {{ $tag->name }}"><i class="green">
                {{ $tag->name }}&nbsp;&nbsp;&nbsp;
              </i>
            </a>
          </li>
          @endforeach
        </ul>
        @endif
      </div>
    </div>

  </div>
</div>
</div>

<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="comments">
    <ul class="list-group">
      @foreach ($post->comments as $comment)
      <li class="list-group-item">
        <strong><i class="green">{{ $comment->user->firstname." ".$comment->user->lastname }}:&nbsp;</i></strong>
        {{$comment->comments}}
        <small  class="nav pull-right panel_toolbox">{{$comment->created_at->diffForHumans()}}</small>
      </li>
      @endforeach
    </ul>
    <br>
  </div>
</div>

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
  </div>
</div>

{{-- </div> --}}
@endsection