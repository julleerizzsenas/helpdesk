@extends('layouts.master')
@section('title' , 'Add Topic')


@section('content')

@if (Session::has('message'))
<div class= " {{ Session::get('alert') }} ">
	{{ Session::get('message') }}
</div>
@endif

<div class="page-title">
	<div class="title_left">
		<h3>Add Topic</h3>
	</div>
</div>
<hr>


<div class="col-md-12 col-xs-12 blog-main">
	<form method = "POST" action = "/posts">
		{{csrf_field() }}

		<div class="form-group">
			<label for="topicname">Topic Name:</label>
			<input type="text" class="form-control" id="topicname" name="topicname" required>
		</div>

		<div class="form-group">
			<label for="description">Description:</label>
        	<textarea name="description" id="description" class="form-control" required></textarea>
		</div>

{{-- 		<div class="form-group">
			<label for="tags">Tags:</label>				
			<select id="tags" name="tags" class="form-control" required>
			@foreach($tags as $key => $value)
			  <option value="{{$key}}">{{$value}}</option>	
			@endforeach
			</select>
		</div> --}}

		<div class="form-group">
			<label for="tags">Tags:</label>				
			<input type="text" data-role="tagsinput" id="tags" name="tags" class="tm-input form-control tm-input-info"/>
			<input type="hidden" name="tagsdata" class="tagsdata">
		</div>

		<div class="form-group">
			<label for="image">Add Image:</label>	
			<br>
			<div class="btn-group">
				<a class="btn" title="Insert picture (or just drag & drop)" id="image"><i class="fa fa-picture-o"></i></a>
				<input type="file" data-role="magic-overlay" data-target="#image" data-edit="image" />
			</div>
		</div><br>

		<div class = "form-group">
			<button type="submit" class="btn btn-primary">Publish</button>
		</div>

		@include('layouts.errors')

	</form>
	
	<script type="text/javascript">
				$(".tm-input").tagsManager();
				$('.tagsdata').val()=$('#tags').tagsinput('item');

	</script>

</div>
@endsection