@extends('client.layout.main')

@section('content-client')
  <section class="p-0 bg-dark-gray">
    <div
      class="swiper lg-no-parallax full-screen md-h-600px sm-h-500px swiper-light-pagination ipad-top-space-margin magic-cursor drag-cursor"
      data-slider-options="{&quot;slidesPerView&quot;:1,&quot;loop&quot;:true,&quot;parallax&quot;:true,&quot;speed&quot;:1200,&quot;autoplay&quot;:{&quot;delay&quot;:4000,&quot;disableOnInteraction&quot;:false},&quot;pagination&quot;:{&quot;el&quot;:&quot;.swiper-pagination-bullets&quot;,&quot;clickable&quot;:true},&quot;navigation&quot;:{&quot;nextEl&quot;:&quot;.slider-one-slide-next-1&quot;,&quot;prevEl&quot;:&quot;.slider-one-slide-prev-1&quot;},&quot;keyboard&quot;:{&quot;enabled&quot;:true,&quot;onlyInViewport&quot;:true},&quot;effect&quot;:&quot;slide&quot;}">
      <div class="swiper-wrapper">
        @foreach ($slider as $item)
          <div class="swiper-slide overflow-hidden">
            <div class="cover-background position-absolute top-0 start-0 w-100 h-100"
              style="background-image: url('{{ asset('storage/assets/attach/' . $item->image) }}');"
              data-swiper-parallax="1000">
              <div class="opacity-light bg-gradient-black-green"></div>
              <div class="container h-100" data-swiper-parallax="-300">
                <div class="row align-items-center justify-content-center h-100 text-center">
                  <div class="col-xl-7 col-lg-9 col-md-10 position-relative text-white flex flex-col">

                    <span
                      class="opacity-7 fs-75 xs-fs-60 alt-font fw-700 text-shadow-extra-large ls-minus-2px mb-45px sm-mb-30px xs-mb-20px d-inline-block swiper-parallax-fancy-text"
                      data-fancy-text="{&quot;effect&quot;:&quot;rotate&quot;,&quot;string&quot;:[&quot;{{ $item->name }}&quot;]}"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach

      </div>

      <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></div>
    </div>
  </section>

  <section class="background-position-center pb-2 sm-pb-50px position-relative z-index-1 sm-background-image-none"
    style="background-image: url('https://mpp.purwakartakab.go.id/img/bg/vertical-line.svg')">
    <div class="container">
      <div class="row align-items-center">

        <div class="col-xl-12 offset-xl-1 col-lg-12 text-center text-lg-start"
          data-anime="{&quot;el&quot;:&quot;childs&quot;,&quot;opacity&quot;:[0,1],&quot;duration&quot;:600,&quot;delay&quot;:200,&quot;staggervalue&quot;:200,&quot;easing&quot;:&quot;easeOutQuad&quot;}">
          <div class="row justify-content-center justify-content-lg-start">
            <div>
              <h3 class="alt-font fw-600 text-dark-gray ls-minus-1px shadow-none" data-shadow-animation="true"
                data-animation-delay="700">
                {{ appSetting()->name }}

              </h3>
            </div>


            <div class="col-md-11">
              <div
                class="pt-15px pb-15px ps-30px pe-30px xs-p-15px bg-white border border-color-extra-medium-gray border-radius-6px mt-35px icon-with-text-style-08 text-center text-lg-start">
                <div class="feature-box feature-box-left-icon-middle d-inline-flex align-middle gap-3">


                  <div class="feature-box-content">
                    <span class="fs-18 fw-500 text-dark-gray d-block">
                      Pusat Pelayanan Terpadu bagi masyarakat
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="pb-6">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5 md-mb-30px"
          data-anime='{ "el": "childs", "translateX": [15, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
          <div
            class="bg-dark-gray border-radius-100px fs-12 text-white ps-20px pe-20px d-inline-block text-uppercase fw-500 mb-5 ls-05px">
            Area Fokus</div>
          <h3 class="text-dark-gray fw-600 ls-minus-2px">Komitmen Kami untuk Menjaga Keamanan dan Kesejahteraan Masyarakat
          </h3>
          <p class="w-90 md-w-100">Kami berdedikasi untuk menjaga ketertiban dan keamanan di masyarakat dengan
            profesionalisme dan integritas. Dengan pengalaman dan pelatihan yang mendalam, kami berkomitmen untuk
            memberikan pelayanan terbaik kepada setiap warga negara.</p>

        </div>
        <div class="col-xl-6 col-lg-7 offset-xl-1">
          <div class="row row-cols-auto row-cols-sm-2"
            data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 600, "delay":300, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <!-- start features box item -->
            <div class="col align-self-start">
              <div class="feature-box text-start ps-30px">
                <div class="feature-box-icon position-absolute left-0px top-10px">
                  <h1
                    class="fs-85 text-outline text-outline-width-1px text-outline-color-dark-gray fw-700 ls-minus-1px opacity-2 mb-0">
                    01</h1>
                </div>
                <div class="feature-box-content last-paragraph-no-margin pt-25 md-pt-17 sm-pt-40px">
                  <span class="text-dark-gray fs-19 d-inline-block fw-600 mb-5px">Keamanan Publik</span>
                  <p>Kami berkomitmen untuk menjaga keamanan publik dengan tindakan yang cepat dan efektif dalam
                    menghadapi situasi darurat.</p>
                  <span class="w-40px h-3px bg-base-color d-inline-block"></span>
                </div>
              </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col align-self-end mt-20 xs-mt-15px">
              <div class="feature-box text-start ps-30px">
                <div class="feature-box-icon position-absolute left-0px top-10px">
                  <h1
                    class="fs-85 text-outline text-outline-width-1px text-outline-color-dark-gray fw-700 ls-minus-1px opacity-2 mb-0">
                    02</h1>
                </div>
                <div class="feature-box-content last-paragraph-no-margin pt-25 md-pt-17 sm-pt-40px">
                  <span class="text-dark-gray fs-19 d-inline-block fw-600 mb-5px">Pelayanan Masyarakat</span>
                  <p>Memberikan pelayanan yang responsif dan ramah kepada masyarakat untuk memastikan kebutuhan dan
                    hak-hak warga terpenuhi dengan baik.</p>
                  <span class="w-40px h-3px bg-base-color d-inline-block"></span>
                </div>
              </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col align-self-start mt-minus-12 xs-mt-15px">
              <div class="feature-box text-start ps-30px">
                <div class="feature-box-icon position-absolute left-0px top-10px">
                  <h1
                    class="fs-85 text-outline text-outline-width-1px text-outline-color-dark-gray fw-700 ls-minus-1px opacity-2 mb-0">
                    03</h1>
                </div>
                <div class="feature-box-content last-paragraph-no-margin pt-25 md-pt-17 sm-pt-40px">
                  <span class="text-dark-gray fs-19 d-inline-block fw-600 mb-5px">Pencegahan Kriminal</span>
                  <p>Mengimplementasikan berbagai program dan inisiatif untuk mencegah tindakan kriminal dan meningkatkan
                    keamanan komunitas.</p>
                  <span class="w-40px h-3px bg-base-color d-inline-block"></span>
                </div>
              </div>
            </div>
            <!-- end features box item -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="pb-6">
    <div class="container">
      <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mb-6 md-mb-50px"
        data-anime='{ "el": "childs", "translateY": [0, 0], "perspective": [1000,1200], "scale": [1.1, 1], "rotateX": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
        <div class="col md-mb-30px">
          <div
            class="box-shadow-quadruple-large box-shadow-quadruple-large-hover border border-2 border-color-white border-radius-8px overflow-hidden">
            <img src="{{ asset('Presisi.png') }}" class="w-100" alt="">
            <div class="pb-50px ps-15px pe-15px bg-very-light-gray last-paragraph-no-margin text-center">
            </div>
          </div>
        </div>
        <div class="col md-mb-30px">
          <div
            class="box-shadow-quadruple-large box-shadow-quadruple-large-hover border border-2 border-color-white border-radius-8px overflow-hidden">
            <img src="{{ asset('2.png') }}" class="w-100" alt="">
            <div class="pb-50px ps-15px pe-15px bg-very-light-gray last-paragraph-no-margin text-center">

            </div>
          </div>
        </div>
        <div class="col">
          <div
            class="box-shadow-quadruple-large box-shadow-quadruple-large-hover border border-2 border-color-white border-radius-8px overflow-hidden">
            <img src="{{ asset('1.png') }}" class="w-60" alt="">
            <div class="pb-50px ps-15px pe-15px bg-very-light-gray last-paragraph-no-margin text-center">

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="overflow-hidden position-relative pt-0 lg-pb-0">
    <div class="container-fluid">
      <div class="row position-relative">
        <div class="col swiper swiper-width-auto feather-shadow text-center"
          data-slider-options='{ "slidesPerView": "auto", "spaceBetween":40, "speed": 20000, "loop": true, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false, "reverseDirection": true }, "effect": "slide" }'>
          <div class="swiper-wrapper pb-30px marquee-slide">
            <!-- start client item -->
            <div class="swiper-slide">
              <div
                class="fs-130 md-fs-90 sm-fs-70 alt-font text-dark-gray fw-600 ls-minus-6px sm-ls-minus-2px word-break-normal">
                Kami hadir untuk melindungi dan melayani masyarakat <span class="ms-20px">-</span></div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="swiper-slide">
              <div
                class="fs-130 md-fs-90 sm-fs-70 alt-font text-dark-gray fw-600 ls-minus-6px sm-ls-minus-2px word-break-normal">
                Keamanan dan ketertiban masyarakat adalah prioritas kami <span class="ms-20px">-</span></div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="swiper-slide">
              <div
                class="fs-130 md-fs-90 sm-fs-70 alt-font text-dark-gray fw-600 ls-minus-6px sm-ls-minus-2px word-break-normal">
                Bersama membangun rasa aman untuk Indonesia yang lebih baik <span class="ms-20px">-</span></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="background-position-center position-relative sm-background-image-none"
    style="background-image: url('https://mpp.purwakartakab.go.id/img/bg/vertical-line.svg')">
    <div class="container">
      <div class="row justify-content-center mb-1">
        <div class="col-lg-7 text-center"
          data-anime="{&quot;el&quot;:&quot;childs&quot;,&quot;translateY&quot;:[50,0],&quot;opacity&quot;:[0,1],&quot;duration&quot;:600,&quot;delay&quot;:0,&quot;staggervalue&quot;:300,&quot;easing&quot;:&quot;easeOutQuad&quot;}">
          <span class="alt-font text-uppercase fw-600 d-inline-block ls-1px">
            Dapatkan informasi terbaru
          </span>

          <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px shadow-none" data-shadow-animation="true"
            data-animation-delay="1000">
            Jelajahi
            <span class="text-highlight fw-800">Berita<span
                class="bg-gradient-emerald-blue-emerald-green h-8px bottom-10px opacity-6 separator-animation"></span></span>
          </h3>
        </div>
      </div>

      <div class="row">
        <div class="col-12 px-0">
          <ul
            class="blog-grid blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-double-extra-large"
            data-anime="{&quot;el&quot;:&quot;childs&quot;,&quot;translateY&quot;:[50,0],&quot;opacity&quot;:[0,1],&quot;duration&quot;:1000,&quot;willchange&quot;:&quot;transform&quot;,&quot;delay&quot;:0,&quot;staggervalue&quot;:300,&quot;easing&quot;:&quot;easeOutQuad&quot;}">
            <li class="grid-sizer"></li>
            @foreach ($news as $item)
              <li class="grid-item">
                <div class="card border-0 border-radius-4px box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                  <div class="blog-image">
                    <a href="{{ url('news/' . $item->slug) }}" class="d-block">
                      <img class="own-thumbnail" src="{{ asset('storage/assets/attach/' . $item->attachment) }}"
                        alt="" />
                    </a>


                  </div>

                  <div class="card-body p-13 md-p-11">
                    <a href="{{ url('news/' . $item->slug) }}"
                      class="card-title mb-15px alt-font fw-700 fs-18 lh-30 text-dark-gray text-dark-gray-hover d-inline-block line-clamp-2">
                      {{ $item->name }}
                    </a>



                    <div
                      class="author d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase">
                      <div class="me-auto">
                        <span class="blog-date d-inline-block">
                          {{ timesInd($item->created_at) }}
                        </span>

                        <div class="d-inline-block author-name">
                          By
                          <span class="text-dark-gray text-dark-gray-hover text-decoration-line-bottom fw-500">
                            Admin
                          </span>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </li>
            @endforeach

          </ul>
        </div>
      </div>
    </div>
  </section>
@endsection
