@extends('layouts.master')
@section('title' , 'Tags')

@section('content')

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
   <div class="x_panel">
        <div class="x_title">
            <h4><b>Tags</b></h4>
        </div>
        <div class="x_content pull-left d">
            <ul>
            @foreach ($tags as $tag)
                <li><a href="/tags/{{ $tag->name }}">
                    <p>&nbsp;{{ $tag->name }}</p><hr>
                </a>
                </li>
            @endforeach 
            </ul>     
        </div>
    </div>
</div>



@endsection
