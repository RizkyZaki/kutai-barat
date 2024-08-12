<nav
  class="navbar navbar-expand-lg header-transparent bg-transparent header-reverse glass-effect border-bottom border-color-transparent-white-light"
  data-header-hover="light">
  <div class="container-fluid">
    <div class="col-auto me-auto">
      <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('storage/assets/logo/' . appSetting()->logo) }}" alt="Logo" class="default-logo">
        <img src="{{ asset('storage/assets/logo/' . appSetting()->logo) }}" alt="Logo" class="alt-logo">
      </a>
    </div>

    <div class="col-auto menu-order position-static">
      <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-mpp"
        aria-controls="navbar-mpp" aria-label="Toggle navigation">
        <span class="navbar-toggler-line"></span>
        <span class="navbar-toggler-line"></span>
        <span class="navbar-toggler-line"></span>
        <span class="navbar-toggler-line"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbar-mpp">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link">Beranda</a>
          </li>
          <li class="nav-item dropdown simple-dropdown">
            <a href="javascript:void(0);" class="nav-link">Informasi</a>
            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink6" role="button"
              data-bs-toggle="dropdown" aria-expanded="false"></i>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink6">
              @foreach (informationLoad() as $item)
                <li class="dropdown"><a href="{{ url('information/' . $item->slug) }}">{{ $item->name }}</a></li>
              @endforeach
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{ url('news') }}" class="nav-link">Berita</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('contact') }}" class="nav-link">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
