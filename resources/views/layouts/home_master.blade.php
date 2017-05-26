@include('layouts.header')
<body>
  <div class="container body">
    <div class="main_container">
      {{-- <div class="top_nav"> --}}
      <div class="nav_menu">
        <ul class="nav nav-justified">
          <li><a href="issuetracker">Issue Tracker</a></li>
          <li><a href="helpdesk">Helpdesk</a></li>
          <li><a href="about">About Us</a></li>
          <li><a href="contact">Contact Us</a></li>
        </ul>
      </div>
      {{-- </div> --}}
    <br><br>
    {{-- <div class="x_panel"> --}}
    <div class="bg-title text-center"><br><br>
      <div class="clearfix"></div>
      <h1 class="upper">Knowledge Base</h1><br>
      <div class="center">
        @if(auth()->check())
          <a type="button" class="btn btn-info" href="/home">Dashboard</a>
        @else
          <a type="button" class="btn btn-info" href="/login">Login Now</a>
        @endif
      </div><br><br>
    </div>
    <div class="x_panel">
      <div class="x_content">
        @yield('content')
      </div>
      <div class="x_content">
        @include('layouts.home_footer')
      </div>        
    </div>


          
       
    {{-- </div> --}}
