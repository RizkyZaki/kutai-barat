@extends('admin.layout.main')

@section('content-admin')
  <div class="container-fluid">
    <div class="nk-content-inner">
      <div class="nk-content-body">
        <div class="nk-block">
          <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
              <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Kontak</h3>
              </div>
            </div>
          </div>
          <div class="nk-block">
            <div class="row g-gs">
              <div class="col-md-12">
                <div class="card">
                  <div class="nk-ecwg nk-ecwg6">
                    <div class="card-inner">
                      <table class="datatable-init table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Subjek</th>
                            <th>Email</th>
                            <th>Pesan</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                            $no = 1;
                          @endphp
                          @foreach ($data as $item)
                            <tr>
                              <td>{{ $no++ }}</td>
                              <td>{{ $item->subject }}</td>
                              <td>{{ $item->email }}</td>
                              <td>{{ $item->message }}</td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
