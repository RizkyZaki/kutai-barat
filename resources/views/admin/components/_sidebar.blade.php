<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
  <div class="nk-sidebar-element nk-sidebar-head">
    <div class="nk-sidebar-brand">
      <a href="{{ url('/') }}" class="logo-link nk-sidebar-logo">
        <img class="logo-light logo-img" src="{{ asset('storage/assets/logo/' . appSetting()->logo) }}"
          srcset="{{ asset('storage/assets/logo/' . appSetting()->logo) }}" alt="logo">
        <img class="logo-dark logo-img" src="{{ asset('storage/assets/logo/' . appSetting()->logo) }}"
          srcset="{{ asset('storage/assets/logo/' . appSetting()->logo) }}" alt="logo-dark">
        <img class="logo-small logo-img logo-img-small" src="{{ asset('storage/assets/logo/' . appSetting()->logo) }}"
          srcset="{{ asset('storage/assets/logo/' . appSetting()->logo) }}" alt="logo-small">
      </a>
    </div>
    <div class="nk-menu-trigger me-n2">
      <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em
          class="icon ni ni-arrow-left"></em></a>
      <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em
          class="icon ni ni-menu"></em></a>
    </div>
  </div><!-- .nk-sidebar-element -->
  <div class="nk-sidebar-element">
    <div class="nk-sidebar-content">
      <div class="nk-sidebar-menu" data-simplebar>
        <ul class="nk-menu">
          <li class="nk-menu-heading">
            <h6 class="overline-title text-dark-alt">Dasbor</h6>
          </li><!-- .nk-menu-item -->

          <li class="nk-menu-item">
            <a href="{{ url('dashboard/overview') }}" class="nk-menu-link">
              <span class="nk-menu-icon"><em class="icon ni ni-home"></em></span>
              <span class="nk-menu-text">Ikhtisar</span>
            </a>
          </li>



          <li class="nk-menu-heading">
            <h6 class="overline-title text-dark-alt">Publikasi</h6>
          </li><!-- .nk-menu-item -->
          <li class="nk-menu-item">
            <a href="{{ url('dashboard/news') }}" class="nk-menu-link">
              <span class="nk-menu-icon"><em class="icon ni ni-file-text-fill"></em></span>
              <span class="nk-menu-text">Berita</span>
            </a>
          </li>
          <li class="nk-menu-item">
            <a href="{{ url('dashboard/slider') }}" class="nk-menu-link">
              <span class="nk-menu-icon"><em class="icon ni ni-tags"></em></span>
              <span class="nk-menu-text">Slider</span>
            </a>
          </li>
          <li class="nk-menu-item">
            <a href="{{ url('dashboard/information') }}" class="nk-menu-link">
              <span class="nk-menu-icon"><em class="icon ni ni-tags"></em></span>
              <span class="nk-menu-text">Informasi</span>
            </a>
          </li>
          <li class="nk-menu-item">
            <a href="{{ url('dashboard/contact') }}" class="nk-menu-link">
              <span class="nk-menu-icon"><em class="icon ni ni-book-fill"></em></span>
              <span class="nk-menu-text">Pesan</span>
            </a>
          </li>

          <li class="nk-menu-heading">
            <h6 class="overline-title text-dark-alt">Pengaturan</h6>
          </li><!-- .nk-menu-item -->
          <li class="nk-menu-item">
            <a href="{{ url('dashboard/settings') }}" class="nk-menu-link">
              <span class="nk-menu-icon"><em class="icon ni ni-setting-alt"></em></span>
              <span class="nk-menu-text">Pengaturan Umum</span>
            </a>
          </li>

        </ul><!-- .nk-menu -->
      </div><!-- .nk-sidebar-menu -->
    </div><!-- .nk-sidebar-content -->
  </div><!-- .nk-sidebar-element -->
</div>
