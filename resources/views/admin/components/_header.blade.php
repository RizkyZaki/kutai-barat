<div class="nk-header nk-header-fixed is-light">
  <div class="container-fluid">
    <div class="nk-header-wrap">
      <div class="nk-menu-trigger d-xl-none ms-n1">
        <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em
            class="icon ni ni-menu"></em></a>
      </div>
      <div class="nk-header-brand d-xl-none">
        <a href="{{ url('/') }}" class="logo-link">
          <img class="logo-light logo-img" src="{{ asset('storage/assets/logo/' . appSetting()->logo) }}"
            srcset="{{ asset('storage/assets/logo/' . appSetting()->logo) }}" alt="logo">
          <img class="logo-dark logo-img" src="{{ asset('storage/assets/logo/' . appSetting()->logo) }}"
            srcset="{{ asset('storage/assets/logo/' . appSetting()->logo) }}" alt="logo-dark">
        </a>
      </div><!-- .nk-header-brand -->
      <div class="nk-header-search ms-3 ms-xl-0">
        <em class="icon ni ni-search"></em>
        <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search anything">
      </div><!-- .nk-header-news -->
      <div class="nk-header-tools">
        <ul class="nk-quick-nav">

          <li class="dropdown notification-dropdown">
            <a href="{{ url('/') }}" class="nk-quick-nav-icon">
              <div class="icon-status icon-status-info"><em class="icon ni ni-monitor"></em></div>
            </a>

          </li>
          <li class="dropdown user-dropdown">
            <a href="#" class="dropdown-toggle me-n1" data-bs-toggle="dropdown">
              <div class="user-toggle">
                <div class="user-avatar sm">
                  <em class="icon ni ni-user-alt"></em>
                </div>
                <div class="user-info d-none d-xl-block">

                  <div class="user-name dropdown-indicator">{{ auth()->user()->name }}</div>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
              <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                <div class="user-card">
                  <div class="user-avatar">
                    @php
                      $firstName = strtok(auth()->user()->name, ' ');
                      $nameParts = explode(' ', auth()->user()->name);
                      $initial = '';
                      foreach ($nameParts as $key => $namePart) {
                          if ($key < 2) {
                              $initial .= strtoupper(substr($namePart, 0, 1));
                          }
                    } @endphp <span>
                      {{ $initial }}</span>
                  </div>
                  <div class="user-info">
                    <span class="lead-text">{{ auth()->user()->name }}</span>
                    <span class="sub-text">{{ auth()->user()->email }}</span>
                  </div>
                </div>
              </div>
              <div class="dropdown-inner">
                <ul class="link-list">

                  {{-- <li><a href="{{ url('dashboard/profile') }}"><em class="icon ni ni-setting-alt"></em><span>Pengaturan
                        Akun</span></a></li> --}}
                  <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Mode Gelap</span></a>
                  </li>
                </ul>
              </div>
              <div class="dropdown-inner">
                <ul class="link-list">
                  <li><a href="{{ url('logout') }}"><em class="icon ni ni-signout"></em><span>Keluar</span></a></li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div><!-- .nk-header-wrap -->
  </div><!-- .container-fliud -->
</div>
