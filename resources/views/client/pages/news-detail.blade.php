@extends('client.layout.main')

@section('content-client')
  <section class="cover-background one-fifth-screen bg-dark-gray ipad-top-space-margin d-flex align-items-center"
    style="background-image: url({{ asset('storage/assets/attach/' . $data->attachment) }})">
    <div class="opacity-extra-medium bg-gradient-dark-transparent"></div>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 position-relative"
          data-anime="{&quot;el&quot;:&quot;childs&quot;,&quot;translateY&quot;:[30,0],&quot;opacity&quot;:[0,1],&quot;duration&quot;:600,&quot;delay&quot;:0,&quot;staggervalue&quot;:300,&quot;easing&quot;:&quot;easeOutQuad&quot;}">
          <div class="d-inline-block mb-20px">
            <span class="text-white fs-18 opacity-6">
              <span class="text-white">{{ timesInd($data->created_at) }}</span>
              <span class="d-inline-block fs-24 opacity-5 align-middle ms-15px me-15px">&bull;</span>

            </span>
          </div>

          <h1 class="text-white w-60 lg-w-80 md-w-70 sm-w-100 alt-font fw-700 ls-minus-2px text-shadow-double-large mb-0">
            {{ $data->name }}
          </h1>
        </div>
      </div>
    </div>
  </section>

  <section class="pb-4">
    <div class="container">
      <div class="row justify-content-center"
        data-anime="{&quot;el&quot;:&quot;childs&quot;,&quot;translateY&quot;:[50,0],&quot;opacity&quot;:[0,1],&quot;duration&quot;:1200,&quot;delay&quot;:0,&quot;staggervalue&quot;:150,&quot;easing&quot;:&quot;easeOutQuad&quot;}">
        <div class="mx-auto mb-2">
          <img src="{{ asset('storage/assets/attach/' . $data->attachment) }}" width="300" alt="">
        </div>
        <div class="col-lg-10 last-paragraph-no-margin">
          {!! $data->description !!}
        </div>
      </div>
    </div>
  </section>
@endsection
