@extends('admin.layout.main')

@section('content-admin')
  <div class="container-fluid">
    <div class="nk-content-inner">
      <div class="nk-content-body">
        <div class="nk-block nk-block-lg">
          <div class="nk-block-head">
            <div class="nk-block-head-content">
              <h4 class="nk-block-title">{{ $heading }}</h4>
              <p>Ini adalah pusat pengaturan untuk mengatur logo, lokasi, keterangan, dan metadata website DPMPTSP
                Purwakarta</p>
            </div>
          </div>
          <div class="card card-bordered card-preview">
            <div class="card-inner">
              @if (session()->has('success'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                  <strong>{{ session('success') }}</strong>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif
              @if (session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>{{ session('error') }}</strong>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif
              <form action="{{ url('dashboard/settings') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="oldLogo" value="{{ $setting->logo }}">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="name">Nama Website</label>
                    <input type="text" placeholder="Masukkan nama..."
                      class="form-control @error('name') is-invalid @enderror" name="name"
                      value="{{ $setting->name ?? '' }}">
                    @error('name')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="keyword">Keyword</label>
                    <input type="text" placeholder="Masukkan keyword..."
                      class="form-control @error('keyword') is-invalid @enderror" name="keyword"
                      value="{{ $setting->keyword ?? '' }}">
                    @error('keyword')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>


                  <div class="col-md-6 mb-3">
                    <label for="email">Email</label>
                    <input type="email" placeholder="Masukkan email..."
                      class="form-control @error('email') is-invalid @enderror" name="email"
                      value="{{ $setting->email ?? '' }}">
                    @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>

                  <div class="col-md-6 mb-3">
                    <label for="logo">Logo</label>
                    <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo">
                    @error('logo')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>

                  <div class="col-md-12 mb-3">
                    <label for="phone">Nomor Telepon</label>
                    <input type="text" placeholder="Masukkan nomor telepon..."
                      class="form-control @error('phone') is-invalid @enderror" name="phone"
                      value="{{ $setting->phone ?? '' }}">
                    @error('phone')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>

                  <div class="col-md-12 mb-3">
                    <label for="address">Alamat</label>
                    <input type="text" placeholder="Masukkan alamat..."
                      class="form-control @error('address') is-invalid @enderror" name="address"
                      value="{{ $setting->address ?? '' }}">
                    @error('address')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>

                  <div class="col-md-12 mb-3">
                    <label for="link_yt">Link YouTube</label>
                    <input type="text" placeholder="Masukkan link YouTube..."
                      class="form-control @error('link_yt') is-invalid @enderror" name="link_yt"
                      value="{{ $setting->link_yt ?? '' }}">
                    @error('link_yt')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>

                  <div class="col-md-12 mb-3">
                    <label for="link_fb">Link Facebook</label>
                    <input type="text" placeholder="Masukkan link Facebook..."
                      class="form-control @error('link_fb') is-invalid @enderror" name="link_fb"
                      value="{{ $setting->link_fb ?? '' }}">
                    @error('link_fb')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>

                  <div class="col-md-12 mb-3">
                    <label for="link_ig">Link Instagram</label>
                    <input type="text" placeholder="Masukkan link Instagram..."
                      class="form-control @error('link_ig') is-invalid @enderror" name="link_ig"
                      value="{{ $setting->link_ig ?? '' }}">
                    @error('link_ig')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>

                  <div class="mb-3">
                    <label for="description">Deskripsi</label>
                    <textarea name="description" rows="10" id="description"
                      class="form-control @error('description') is-invalid @enderror" placeholder="Masukkan deskripsi...">{{ $setting->description }}</textarea>
                    @error('description')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
