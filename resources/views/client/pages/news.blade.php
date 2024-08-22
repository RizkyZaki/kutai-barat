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
              <span class="text-white">Jelajahi Berita</span>
              <span class="d-inline-block fs-24 opacity-5 align-middle ms-15px me-15px">&bull;</span>
            </span>
          </div>

          <h1 class="text-white w-60 lg-w-80 md-w-70 sm-w-100 alt-font fw-700 ls-minus-2px text-shadow-double-large mb-0">
            Berita
          </h1>
        </div>
      </div>
    </div>

  </section>
  <section class="pb-5">
    <div class="container">
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
                      <img class="own-thumbnail" src="{{ asset('storage/assets/attach/' . $item->potrait) }}"
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
