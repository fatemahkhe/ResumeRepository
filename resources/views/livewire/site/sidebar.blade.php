@extends('layouts.app')
<section name="sidebar" class="sidebar" id="sidebar">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="#">Powerful Resume</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
            <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
            <li><a href="{{route('about')}}" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
            <li><a href="{{route('about')}}" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Educations</span></a></li>
            <li><a href="{{route('about')}}" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Experiances</span></a></li>
            <li><a href="{{route('about')}}" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>skills</span></a></li>
            <li><a href="{{route('about')}}" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Certificates</span></a></li>
            <li><a href="{{route('about')}}" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>FAQs</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
</section>
