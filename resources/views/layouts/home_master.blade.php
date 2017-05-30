@include('layouts.header')

<body>
  <div class="container body">
    <div class="main_container">
      <nav class="navbar-fixed-top">
        <div class="nav_menu class c">
          <ul class="nav nav-justified">
            <li><a class="c" href="#"><b>Issue Tracker</b></a></li>
            <li><a class="c" href="#"><b>Helpdesk</b></a></li>
            <li><a class="c" href="#"><b>About Us</b></a></li>
            <li><a class="c" href="#"><b>Contact Us</b></a></li>
          </ul>
        </div>
      </nav>
      <br><br>
      <div class="bg-title text-center"><br><br><br><br>
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


