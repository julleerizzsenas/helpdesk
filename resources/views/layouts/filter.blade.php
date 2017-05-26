

	@if(auth()->check())
		@include('pages.show')
	@else
		@include('layouts.show_post')
	@endif

