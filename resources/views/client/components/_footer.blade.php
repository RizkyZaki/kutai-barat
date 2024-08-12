<footer class="footer-dark bg-slate-blue p-0">
  <div class="d-none d-md-flex">
    <div class="overlap-section-one-fourth animation-float">
      <img src="https://mpp.purwakartakab.go.id/img/bg/bg-01.webp" alt="">
    </div>
  </div>

  <div class="container">
    <div class="row justify-content-center pt-55px pb-55px sm-pt-40px sm-pb-40px">
      <div
        class="col-lg-3 col-md-12 col-sm-6 last-paragraph-no-margin text-center text-sm-start text-md-center text-lg-start md-mb-30px">
        <a href="{{ url('/') }}" class="footer-logo d-inline-block">
          <img src="{{ asset('storage/assets/logo/' . appSetting()->logo) }}" width="200"
            style="max-height: 100% !important;" alt="Logo">
        </a>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 sm-mb-30px last-paragraph-no-margin text-center text-sm-start">
        <span class="d-block text-base-color fs-15 ls-1px mb-5px text-uppercase fw-600">
          Kantor Kami
        </span>

        <p class="lh-30 w-80 text-white lg-w-100 line-clamp-2">
          {{ appSetting()->address }}

        </p>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 xs-mb-30px last-paragraph-no-margin text-center text-sm-start">
        <span class="d-block text-base-color fs-15 ls-1px mb-5px text-uppercase fw-600">
          Butuh Bantuan?
        </span>

        <a href="tel:6281909898111" class="text-white lh-30">
          {{ appSetting()->phone }}
        </a>
        <br>
        <a href="mailto:{{ appSetting()->email }}
" class="text-white">
          {{ appSetting()->email }}
        </a>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 last-paragraph-no-margin text-center text-sm-start">
        <span class="d-block text-base-color fs-15 ls-1px mb-10px text-uppercase fw-600">
          Sosial Media
        </span>
        <div class="elements-social social-icon-style-09">
          <ul class="medium-icon light">
            <li>
              <a class="facebook" href="{{ appSetting()->link_fb }}" target="_blank">
                <i class="fa-brands fa-facebook-f"></i>
                <span></span>
              </a>
            </li>
            <li>
              <a class="instagram" href="{{ appSetting()->link_ig }}" target="_blank">
                <i class="fa-brands fa-instagram"></i>
                <span></span>
              </a>
            </li>
            <li>
              <a class="youtube" href="{{ appSetting()->link_yt }}" target="_blank">
                <i class="fa-brands fa-youtube"></i>
                <span></span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="pt-20px pb-20px border-top border-color-transparent-white-light">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xxl-8 col-lg-7 text-center text-lg-start md-mb-10px">
          <ul class="footer-navbar fs-16">
            <li class="nav-item">
              <a href="https://mpp.purwakartakab.go.id/news" class="nav-link">Berita</a>
            </li>
          </ul>
        </div>

        <div class="col-xxl-4 col-lg-5 fs-16 last-paragraph-no-margin text-white text-center text-lg-end">
          <p>&copy; 2024 Polres Kutai Barat</p>
        </div>
      </div>
    </div>
  </div>
</footer>
