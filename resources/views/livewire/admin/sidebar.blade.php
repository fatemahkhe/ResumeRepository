@extends('layouts.master')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
</head>
<body>
  

<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      {{-- @livewire('nav-item',['style'=>'nav-link','url'=>'charts','type'=>'bi bi-grid','navTitle'=>'Charts'])
      <li class="nav-heading">Pages</li>
      @livewire('nav-item',['style'=>'nav-link collapsed','url'=>'showProfile','type'=>'bi bi-person','navTitle'=>'Profile']) --}}
      {{-- @livewire('nav-item',['style'=>'nav-link collapsed','url'=>'showAccounts','type'=>'bi bi-person','navTitle'=>'Accounts']) --}}
{{-- @livewire('nav-item',['style'=>'nav-link collapsed','url'=>'showProfiles','type'=>'bi bi-book','navTitle'=>'Education'])
      @livewire('nav-item',['style'=>'nav-link collapsed','url'=>'showProfiles','type'=>'ri-handbag-line','navTitle'=>'Experiances'])
      @livewire('nav-item',['style'=>'nav-link collapsed','url'=>'showProfiles','type'=>'ri-collage-line','navTitle'=>'Skills And Cources'])
      @livewire('nav-item',['style'=>'nav-link collapsed','url'=>'showProfiles','type'=>'ri-file-paper-2-line','navTitle'=>'Certificates'])
      @livewire('nav-item',['style'=>'nav-link collapsed','url'=>'showProfiles','type'=>'bi bi-question-circle','navTitle'=>'F.A.Q']) --}}
      <li class="nav-item">
        <a class="nav-link " href="{{route('charts')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>profiles</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('showProfiles')}}">
              <i class="bi bi-circle"></i><span>All Profiles</span>
            </a>
          </li>
          <li>
            <a href="{{route('createProfile')}}">
              <i class="bi bi-circle"></i><span>Create Profile</span> 
            </a>
          </li>
          
        </ul>
      </li><!-- End Components Nav -->

{{--      

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="charts-chartjs.html">
              <i class="bi bi-circle"></i><span>Chart.js</span>
            </a>
          </li>
          <li>
            <a href="charts-apexcharts.html">
              <i class="bi bi-circle"></i><span>ApexCharts</span>
            </a>
          </li>
          <li>
            <a href="charts-echarts.html">
              <i class="bi bi-circle"></i><span>ECharts</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="icons-bootstrap.html">
              <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-remix.html">
              <i class="bi bi-circle"></i><span>Remix Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-boxicons.html">
              <i class="bi bi-circle"></i><span>Boxicons</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul> --}}

  </aside><!-- End Sidebar-->
</body>
</html>