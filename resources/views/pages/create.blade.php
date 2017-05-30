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
			<input type="text" class="form-control" id="topicname" name="topicname">
		</div>

		<div class="form-group">
			<label for="description">Description:</label>
        	<textarea name="description" id="description" class="form-control"></textarea>

			{{-- <div class="x_content">
				<div id="alerts"></div>
				<div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
					<div class="btn-group">
						<a class="btn dropdown-toggle" data-toggle="dropdown" title="Font" aria-expanded="false"><i class="fa fa-font"></i><b class="caret"></b></a>
						<ul class="dropdown-menu">
						</ul>
					</div>

					<div class="btn-group">
						<a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>
								<a data-edit="fontSize 5">
									<p style="font-size:17px">Huge</p>
								</a>
							</li>
							<li>
								<a data-edit="fontSize 3">
									<p style="font-size:14px">Normal</p>
								</a>
							</li>
							<li>
								<a data-edit="fontSize 1">
									<p style="font-size:11px">Small</p>
								</a>
							</li>
						</ul>
					</div>

					<div class="btn-group">
						<a class="btn bo" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
						<a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
						<a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
						<a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
					</div>

					<div class="btn-group">
						<a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
						<a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
						<a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
						<a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
					</div>

					<div class="btn-group">
						<a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
						<a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
						<a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
						<a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
					</div>

					<div class="btn-group">
						<a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
						<div class="dropdown-menu input-append">
							<input class="span2" placeholder="URL" type="text" data-edit="createLink">
							<button class="btn" type="button">Add</button>
						</div>
						<a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
					</div>

					<div class="btn-group">
						<a class="btn" title="Insert picture (or just drag &amp; drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
						<input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage">
					</div>

					<div class="btn-group">
						<a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
						<a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
					</div>
				</div>


				<div id="editor-one" class="editor-wrapper placeholderText" contenteditable="true"></div>

				<textarea id="description" class="form-control" name="description" style="display:none;"></textarea>

				<div class="ln_solid"></div>

				{{-- <div id="editor-one" class="editor-wrapper placeholderText" contenteditable="true"></div>

				<textarea id="description" class="form-control" name="description" style="display:none;"></textarea> --}}
			{{-- </div> --}}
		</div>

		<div class="form-group">
			<label for="tags">Tags:</label>	
			<input type="text" class="form-control" id="tags" name="tags">
		</div>

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