
                <div class="x_title">
                <a href="/posts/{{ $post->id }}">
                    <h2>{{ $post->topicname }}
                </a>
                    <small> by {{ $post->user->firstname." ".$post->user->lastname }}</small></h2>
                

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
