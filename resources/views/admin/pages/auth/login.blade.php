<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.plugins._top')
  <link rel="stylesheet" href="{{ asset('admin/custom/css/login.css') }}">
</head>

<body>

  <body class="nk-body npc-crypto bg-white pg-auth">
    <!-- app body @s -->
    <div class="nk-app-root">
      <div class="nk-split nk-split-page nk-split-lg">
        <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white w-lg-45">
          <div class="absolute-top-right d-lg-none p-3 p-sm-5">
            <a href="#" class="toggle btn btn-white btn-icon btn-light" data-target="athPromo"><em
                class="icon ni ni-info"></em></a>
          </div>
          <div class="nk-block nk-block-middle nk-auth-body">
            <div class="brand-logo pb-2">
              <a href="{{ url('/') }}" class="logo-link">
                <img class="logo-img logo-img-lg" src="{{ asset('storage/assets/logo/' . appSetting()->logo) }}"
                  srcset="{{ asset('storage/assets/logo/' . appSetting()->logo) }}" alt="logo">
              </a>
            </div>
            <div class="nk-block-head">
              <div class="nk-block-head-content">
                <h5 class="nk-block-title">Masuk</h5>
                <div class="nk-block-des">
                  <p>Akses Panel Admin DPMPTSP Purwakarta Menggunakan email dan kata sandi kamu.</p>
                </div>
              </div>
            </div>
            <form>

              <div class="form-group">
                <label class="form-label" for="email">Email</label>
                <div class="form-control-wrap">
                  <input type="text" class="form-control form-control-lg" id="email"
                    placeholder="Masukkan Email...">
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
                  <label class="form-label" for="password">Kata Sandi</label>
                  <a class="link link-primary link-sm" tabindex="-1" href="{{ url('forgot') }}">Lupa
                    Kata Sandi?</a>
                </div>
                <div class="form-control-wrap">
                  <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg"
                    data-target="password">
                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                  </a>
                  <input type="password" class="form-control form-control-lg" id="password"
                    placeholder="Masukkan Kata Sandi...">
                </div>
              </div>

              <div class="form-group">
                <button class="btn login btn-lg btn-primary btn-block">
                  <div class="spinner-border visually-hidden" role="status"></div>Masuk
                </button>
              </div>
            </form><!-- form -->


          </div><!-- .nk-block -->

          <div class="nk-block nk-auth-footer">
            <div class="mt-3">
              <p>&copy; {{ date('Y') }} Kutai Barat.</p>
            </div>
          </div>
        </div><!-- nk-split-content -->
        <div class="nk-split-content nk-split-stretch bg-abstract">

        </div><!-- nk-split-content -->
      </div><!-- nk-split -->
    </div><!-- app body @e -->
    <!-- JavaScript -->

    <!-- select region modal -->

  </body>
  @include('admin.plugins._bottom')
  <script>
    let csrfToken = $('meta[name="csrf-token"]').attr('content');
  </script>
  <script src="{{ asset('admin/custom/js/login.js') }}"></script>

</html>
