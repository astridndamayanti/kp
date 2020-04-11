      <nav class="navbar navbar-expand-sm navbar-dark bg-primary shadow p-3 mb-5 fixed-top">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="nv-right">
        <!-- navbar profile -->
        <li class="list-inline-item active dropdown">
          <a class="" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <img src="../img/belajar.jpg" alt="" class="rounded-circle" width=30 height=30>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="fas fa-user fa-sm mr-auto"></i>
              <span>My profile</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="fas fa-edit fa-sm mr-auto"></i>
              <span>Settings</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
              <i class="fa fa-sign-out fa-sm mr-auto"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </div>
      <!-- collapse navbar -->
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <a class="navbar-brand" href="/guruuu"><img src="../img/logo_wikrama.png" width="40" height="40" alt="">
          I-Learning</a>
        <!-- navbar left -->
        <ul class="navbar-nav mr-auto">
          <!-- navbar left -->
          <li class="nav-item active">
            <a class="nav-link" href="">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/guruuu/{{ $m->slug }}/tugas">Tugas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/guruuu/{{ $m->slug }}/nilai">Nilai</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/guruuu/{{ $m->slug }}/anggota">Anggota</a>
          </li>
        </ul>
        <!-- navbar right -->
        <div class="nb-right">
          <!-- navbar right -->
          <ul class="navbar-nav ml-auto">
            <!-- navbar profile -->
            <li class="nav-item active dropdown float-sm-right">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img src="../img/belajar.jpg" alt="" class="rounded-circle" width=40 height=40>
              </a>
              <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right drop">
                <div class=" dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="./examples/profile.html" class="dropdown-item">
                  <i class="fas fa-user fa-sm mr-auto"></i>
                  <span>My profile</span>
                </a>
                <a href="./examples/profile.html" class="dropdown-item">
                  <i class="fas fa-edit fa-sm mr-auto"></i>
                  <span>Settings</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="/logout" class="dropdown-item">
                  <i class="fa fa-sign-out fa-sm mr-auto"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container jdl">
      <div class="container bg-dark rounded text-white shadow p-3 rounded">
        <h5 class="text-white judul2 jdlmp">{{ $rombel }}</h5>
      </div>
    </div>