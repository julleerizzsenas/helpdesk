
                <div class="x_title">
                <a href="/posts/{{ $post->id }}">
                      <h2>{{ $post->topicname }}</h2>
                </a>                  
                    <ul class="nav pull-right panel_toolbox">
                        <i class="fa fa-comments-o fa-lg" aria-hidden="true">25</i>&nbsp;&nbsp;&nbsp;
                        <i class="fa fa-eye fa-lg">50</i>
                    </ul>             
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="dashboard-widget-content">
                        <ul class="list-unstyled timeline widget">
                            <li>
                                <div class="block">
                                    <div class="block_content">
                                        <p>{{ $post->description }}</p>
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
