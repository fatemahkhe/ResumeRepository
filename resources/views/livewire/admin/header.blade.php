@extends('layouts.master')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
</head>

<body>
  

<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      @livewire('logo',['path'=>'assets/img/logo.png'])
         <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
     @livewire('admin.search-bar')
    <!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            @livewire('image',['path'=>'assets/img/profile-img.jpg','alt'=>'','style'=>'rounded-circle'])
         
            <span class="d-none d-md-block dropdown-toggle ps-2">{{Auth::user()->name}}</span>
          </a><!-- End Profile Iamge Icon -->

          @livewire('admin.dropdown-menu')
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->
  </header><!-- End Header -->

</body>
</html>