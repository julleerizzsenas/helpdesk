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
    {{-- </div> --}}
  </div>
  </div>

  <div class="x_panel">
    @yield('content')
    <hr>
  @include('layouts.home_footer')
  </div>
