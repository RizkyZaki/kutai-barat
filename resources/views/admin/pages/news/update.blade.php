@extends('admin.layout.main')

@section('content-admin')
  <div class="container-fluid">
    <div class="nk-content-inner">
      <div class="nk-content-body">
        <div class="nk-block nk-block-lg">
          <div class="nk-block-head">
            <div class="nk-block-head-content">
              <h4 class="nk-block-title">{{ $heading }}</h4>
            </div>
          </div>
          <div class="card card-bordered card-preview">
            <div class="card-inner">
              <form action="{{ url('dashboard/news/' . $data->slug) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                <input type="hidden" name="oldImage" value="{{ $data->image }}">
                @include('admin.pages.news._form', ['data' => $data])
              </form>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
@endsection
