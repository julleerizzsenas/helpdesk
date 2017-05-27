@include('layouts.header')

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="{{ route('dashboard') }}" class="site_title"><i class="fa fa-book"></i> <span>Knowledge Base</span></a>
					</div>

					<!-- sidebar menu -->
					@include('layouts.sidebar')       
					<!-- /sidebar menu -->  


				</div>
			</div>

			<!-- top navigation -->
			@include('layouts.top_nav')
			<!-- top navigation -->

			<div class="right_col" role="main">

				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>@yield('page_heading')</h3>
						</div>
					</div>

					<div class="clearfix"></div>

					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								@yield('content')
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

@include('layouts.footer')




