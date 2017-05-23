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


<div class="col-sm-8 blog-main">
	<form method = "POST" action = "/posts">
		{{csrf_field() }}

		<div class="form-group">
			<label for="topicname">Topic Name:</label>
			<input type="text" class="form-control" id="topicname" name="topicname">
		</div>

		<div class="form-group">
			<label for="description">Description:</label>
			<textarea id="description" class="form-control" name="description" ></textarea>
		</div>

		<div class="form-group">
			<label for="tags">Tags:</label>	
			{{-- <input id="tags" name= "tags" type="text" class="tags form-control" data-tagsinput-init="true" style="display: none;">
			<div id="tags_1_tagsinput" class="tagsinput" style="width: auto; min-height: 100px; height: 100px;">
				<span class="tag">
					<span>social&nbsp;&nbsp;</span>
					<a href="#" title="Removing tag">x</a>
				</span>
				<div id="tags_1_addTag">
					<input id="tags_1_tag" value="" data-default="add a tag" style="color: rgb(102, 102, 102); width: 72px;">
				</div>
				<div class="tags_clear"></div>
				<div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;">
				</div>
			</div> --}}
			<input type="text" class="form-control" id="tags" name="tags">

		</div>
	
		<div class="form-group">
		<label for="image">Add Image:</label>	
		<br>
		<div class="btn-group">
		  <a class="btn" title="Insert picture (or just drag & drop)" id="image"><i class="fa fa-picture-o"></i></a>
		  <input type="file" data-role="magic-overlay" data-target="#image" data-edit="image" />
		</div>
		</div>

		<div class = "form-group">
			<button type="submit" class="btn btn-primary">Publish</button>
		</div>
	</form>
</div>

@endsection