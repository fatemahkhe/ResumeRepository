<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
    <li class="dropdown-header">
      <h6>{{Auth::user()->name}}</h6>
      <span>web</span>
    </li>
    <li>
      <hr class="dropdown-divider">
    </li>

    {{-- <li>
      @livewire('nav-item',['style'=>'dropdown-item d-flex align-items-center','url'=>'showProfiles','type'=>'bi bi-person','navTitle'=>'show profile'])
    </li> --}}

    <li>
      @livewire('nav-item',['style'=>'dropdown-item d-flex align-items-center','url'=>'logout','type'=>'bi bi-box-arrow-right','navTitle'=>'Logout'])

    </li>

  </ul>
  <!-- End Profile Dropdown Items --> 
  