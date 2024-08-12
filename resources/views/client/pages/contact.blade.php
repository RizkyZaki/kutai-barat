@extends('client.layout.main')

@section('content-client')
  <section class="cover-background one-fifth-screen bg-dark-gray ipad-top-space-margin d-flex align-items-center"
    style="background-image: url({{ asset('client/thumb.jpeg/') }})">
    <div class="opacity-extra-medium bg-gradient-dark-transparent"></div>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 position-relative"
          data-anime="{&quot;el&quot;:&quot;childs&quot;,&quot;translateY&quot;:[30,0],&quot;opacity&quot;:[0,1],&quot;duration&quot;:600,&quot;delay&quot;:0,&quot;staggervalue&quot;:300,&quot;easing&quot;:&quot;easeOutQuad&quot;}">
          <div class="d-inline-block mb-20px">
            <span class="text-white fs-18 opacity-6">
              <span class="text-white">Kontak Kami</span>
              <span class="d-inline-block fs-24 opacity-5 align-middle ms-15px me-15px">&bull;</span>
            </span>
          </div>

          <h1 class="text-white w-60 lg-w-80 md-w-70 sm-w-100 alt-font fw-700 ls-minus-2px text-shadow-double-large mb-0">
            Kontak
          </h1>
        </div>
      </div>
    </div>

  </section>
  <section class="pb-10">
    <div class="container">
      <div class="row">
        <div class="row justify-content-center mt-5">
          <div class="col-lg-6">
            <form action="{{ route('contact.submit') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Masukkan subject"
                  required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email"
                  required>
              </div>
              <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Tulis pesanmu di sini"
                  required></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kirim Pesan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
