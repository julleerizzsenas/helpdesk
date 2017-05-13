@include('layouts.header')

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Helpdesk</span></a>
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
				<div class="row tile_count">
					<div class="jumbotron text-center">
						<h1>Welcome!</h1>
					</div>
				</div>
				
				<br />
			</div>
		</div>
	</div>
</body>

@include('layouts.footer')




