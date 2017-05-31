@include('layouts.header')

<body>
  <div class="container body">
    <div class="main_container">
      <nav class=" nav-header navbar-fixed-top">
        <div class="nav_menu c" id="nav">
          <ul>
            <li><a class="c" href="#"><b>Issue Tracker</b></a></li>
            <li><a class="c" href="#"><b>Helpdesk</b></a></li>
            <li><a class="c" href="#"><b>About Us</b></a></li>
            <li><a class="c" href="#"><b>Contact Us</b></a></li>
          </ul>
        </div>
      </nav>

      {{-- <div id="navButton">
        <a href="#navPanel" class="toggle"></a>
      </div>
      <div id="navPanel">
      <nav>
      <a class="link depth-0" href="#">Home</a>
      </nav>
      </div> --}}



      <br><br>
      <div class="bg-title text-center col-md-12 col-xs-12"><br><br><br><br>
        <div class="clearfix"></div>
        <h1 class="upper deco">Knowledge Base</h1><br><br>
        <h3>coreDev Solutions, Inc.</h3><br><br>
        <div class="center">
          @if(auth()->check())
            <a type="button" class="btn btn-info" href="/dashboard">Dashboard</a>
          @else
            <a type="button" class="btn btn-info" href="/login">Login Now</a>
          @endif
        </div><br><br><br><br>
      </div>
      <div class="x_panel">
        @yield('content')
      </div>


@include('layouts.home_footer')


