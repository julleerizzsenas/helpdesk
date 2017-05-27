@extends('layouts.home_master')

@section('content')
<div class="row">
	<div class="col-md-12 dashboard_graph">	
		<div class="col-md-12">
			<div class="x_panel">
				<div class="x_title">
					<h2><b>{{ $post->topicname }}</b>
						<i class="small">by {{ $post->user->firstname." ".$post->user->lastname }}</i></h2>


						<ul class="nav pull-right panel_toolbox">
							<i class="fa fa-comments-o fa-lg green">25</i>&nbsp;&nbsp;&nbsp;
							<i class="fa fa-eye fa-lg green">50</i>
						</ul>             
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<div class="dashboard-widget-content">
							<ul class="list-unstyled timeline widget">
								<li>
									<div class="block">
										<div class="block_content">
											<p>{{ $post->description }}
												<p class="pull-right"> Date Published: <i class="green">{{ $post->created_at->toFormattedDateString() }}</i></p>
											</p>
											<br>
										</div>	

									</div>
								</li>
							</ul>
						</div>
					</div>

				</div>
				<div class="row pull-right">
					<h4><u><a href="/"><i class="fa fa-long-arrow-left">&nbsp;</i>Return Home</a></u></h4>
				</div>
			</div>



		</div>
	</div>
	@endsection