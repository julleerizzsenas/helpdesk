@extends('layouts.home_master')

@section('content')

<div class="jumbotron text-center">
    <div class="clearfix"></div>
    <h1 class="upper">Knowledge Base</h1><br>
    <div class="center">
        <a type="button" class="btn btn-primary" href="/login">Login Now</a>
    </div>
</div>
<div class="row">
    <div class="col-md-8 dashboard_graph">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    @foreach ($posts as $post)
                      <h2>{{ $post->topicname }}</h2>
                    @endforeach                   
                    <ul class="nav pull-right panel_toolbox">
                        <i class="fa fa-comments-o fa-lg" aria-hidden="true">25</i>&nbsp;&nbsp;&nbsp;
                        <i class="fa fa-eye fa-lg">50</i>
                    </ul>             
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    @foreach ($posts as $post)
                        <p>{{ $post->description }}</p>
                    @endforeach 
                </div>
            </div>
        </div>  
{{-- <div class="col-md-12">
<div class="x_panel">
<div class="x_title">
<h4>Second Topic</h4>
</div>
<div class="x_content">
<p>Some content</p>
</div>
</div>
</div> 
</div>  --}} 

</div>
<div class="col-md-4 dashboard_graph">          
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h4>Related Topics</h4>
            </div>
            <div class="x_content">
                <p>Some content</p>
            </div>
        </div>
    </div> 
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h4>Tags</h4>
            </div>
            <div class="x_content">
                <p>Some content</p>
            </div>
        </div>
    </div>


</div>
</div>


{{-- <div class="col col-md-12">
<p>Hello</p>
</div> --}}

@endsection
