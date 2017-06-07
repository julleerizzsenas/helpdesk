@extends('layouts.home_master')
@section('title' , 'Home')

@section('content')
    <div class="col-md-9 dashboard_graph">
        <div class="col-md-12">
            <div class="x_panel">
                @foreach ($posts as $post)
                  @include ('layouts.home_show')
                @endforeach
        {{ $posts->links() }}

            </div>
        </div>
    </div>  
    <div class="col-md-3 dashboard_graph">          
    <div class="col-md-12 col-xs-6">
        <div class="x_panel">
            <div class="x_title">
                <h4><b>Topics</b></h4>
            </div>
            <div class="x_content d">
                @foreach ($posts->slice(0, 5) as $post)
                    <a href="/posts/{{ $post->id }}">
                         {{ $post->topicname }}<hr>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="col-md-12 col-xs-6"><br> 
        <div class="x_panel">
            <div class="x_title">
                <h4><b>Tags</b></h4>
            </div>
            <div class="x_content pull-left d">
                @foreach ($tags->slice(0, 5) as $tag)
                    <a href="/posts/tags/{{ $tag->name }}">
                        {{ $tag->name }}<hr>
                    </a>
                @endforeach      
            </div>
        </div>
    </div>
</div>

@endsection
