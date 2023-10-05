  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{url('/home')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      @if (auth::user()->role == 'admin')
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person"></i>
          <span>Profile</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{url('/home/pegawai')}}">
              <i class="bi bi-circle"></i><span>Pegawai</span>
            </a>
          </li>
        </ul>
      </li><!-- End Profile Page Nav -->
      @endif
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/home/pendaftaran', auth()->user()->id)}}">
          <i class="bi bi-menu-button-wide"></i><span>Status Pendaftaran</span></i>
        </a>
      </li><!-- End Components Nav -->

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-wallet"></i>
          <span>Pembayaran</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Kartu Nikah Digital</span>
        </a>
      </li><!-- End Register Page Nav --> --}}

    </ul>

  </aside><!-- End Sidebar-->