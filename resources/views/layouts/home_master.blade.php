@include('layouts.header')

<body>
  <div class="container body">
    <div class="main_container">
     <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
                <img style="max-width:100px;" class="brand" src="images/openbook.png" alt="logo" >
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">Issue Tracker</a></li>
            <li><a href="#about">Helpdesk</a></li>
            <li><a href="#contact">About Us</a></li>
            <li><a href="#contact">Contact Us</a></li>
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
      </nav>

      
      <div class="bg-overlay bg-title text-center col-md-12 col-xs-12"><br><br>
        <div class="clearfix"></div>
        <h1 class="upper deco col-md-12 col-xs-12">Knowledge Base</h1><br><br>
        <h3>coreDev Solutions, Inc.</h3><br>
        <div class="center">
          @if(auth()->check())
            <a type="button" class="btn btn-info" href="/dashboard">Dashboard</a>
          @else
            <a type="button" class="btn btn-info" href="/login">Login Now</a>
          @endif
        </div><br><br><br><br><br><br>
      </div>
      <div class="x_panel">
        @yield('content')
      </div>


@include('layouts.home_footer')


