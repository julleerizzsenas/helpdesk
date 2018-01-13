@extends('layouts.master')
@section('title' , 'Topic')

@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2><b>{{ $post->topicname }}</b>
          <i class="small">by {{ $post->user->firstname." ".$post->user->lastname }}</i>
        </h2>
        <ul class="nav pull-right panel_toolbox">
          <li>{{$post->created_at->diffForHumans()}} &nbsp;</li>
          <li><i class="fa fa-comments-o fa-lg" aria-hidden="true">{{$post->comments->count()}}</i>&nbsp;&nbsp;&nbsp;</li>
          <li><i class="fa fa-eye fa-lg">{{$post->tags->count()}}</i></li>
        </ul> 
        <div class="clearfix"></div>
      </div>

      <div class="x_content">
        <div class="dashboard-widget-content">
          {{$post->description}} 
          <hr>

          @if($post->tags)
          <ul class="menu ul">
            @foreach($post->tags as $key => $value)
            <i class="fa fa-tag"></i>
            <li class="menu li">
              <a href="/tags/{{ $value->name }}"><i class="green">
              &nbsp;{{$value->name}}&nbsp;</i>
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
        <small class="nav pull-right panel_toolbox">{{$comment->created_at->diffForHumans()}}</small>
        <hr>

        <ul class="list-group col-md-8 col-xs-8">
          @foreach($comment->replies as $reply)
          <small><i class="blue">&nbsp;&nbsp;&nbsp;{{ $reply->user->firstname." ".$reply->user->lastname }}:&nbsp;</i>
            {{$reply->reply}}</small>
            <small class="nav pull-right panel_toolbox">{{$reply->created_at->diffForHumans()}}</small>
            <hr>
            @endforeach
          </ul>
          {{-- Add Reply --}}

          <form method="POST" action="/posts/{{$post->id}}/comments/replies">
            {{csrf_field()}}
            <div class="form-group col-md-7 col-xs-7">
              <textarea type="text" name="reply" placeholder="Your reply here." class="form-control" required></textarea>
              <input type="hidden" name="comment" value="{{$comment->id}}">
            </div>
            <div class = "form-group col-md-5 col-xs-5">
              <button type="submit" class="btn btn-primary">Reply</button>
            </div>
          </form>
          {{-- Add Reply --}}
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
          <textarea name="comments" placeholder="Your comment here." class="form-control" required></textarea>
        </div>

        <br>

        <div class = "form-group">
          <button type="submit" class="btn btn-primary">Add Comment</button>
        </div>

        @include('layouts.errors')  

      </form>
    </div>
  </div>

  <div class="row pull-right">
    <h4><u><a href="/dashboard"><i class="fa fa-long-arrow-left">&nbsp;</i>Return to Dashboard</a></u></h4>
  </div>

  {{-- </div> --}}
  @endsection