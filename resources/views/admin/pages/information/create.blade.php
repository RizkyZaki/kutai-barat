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
              <form action="{{ url('dashboard/information') }}" method="POST" enctype="multipart/form-data">
                @include('admin.pages.information._form', ['data' => old()])
              </form>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
@endsection
