@extends('layouts.home_master')

@section('content')
    <div class="col-md-9 dashboard_graph">
        <div class="col-md-12">
            <div class="x_panel">
                @foreach ($posts as $post)
                  @include ('layouts.home_show')
                @endforeach
            </div>
        </div>
    </div>  
    <div class="col-md-3 dashboard_graph">          
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h4><b>Related Topics</b></h4>
            </div>
            <div class="x_content">
                @foreach ($posts as $post)
                    <a href="/posts/{{ $post->id }}">
                         {{ $post->topicname }}<hr>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="col-md-12"><br> 
        <div class="x_panel">
            <div class="x_title">
                <h4><b>Tags</b></h4>
            </div>
            <div class="x_content pull-left">
                @foreach ($tags as $tag)
                    <a href="/posts/{{ $post->id }}">  
                        {{ $tag->name }}<hr>
                    </a>
                @endforeach      
            </div>
        </div>
    </div>
</div>
@endsection
