{{-- <div class="col-xl-4"> --}}
  <div class="card">
    @foreach ($profile as $item)
    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

      <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
      <h2>{{Auth::user()->name}}</h2>
      <h3>{{$item->jobTitle}}</h3>
      <div class="social-links mt-2">
        <a href="{{route('addAccount')}}" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="{{route('addAccount')}}" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="{{route('addAccount')}}" class="email"><i class="ri-mail-fill"></i></a>
        <a href="{{route('addAccount')}}" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </div>
{{-- </div> --}}
