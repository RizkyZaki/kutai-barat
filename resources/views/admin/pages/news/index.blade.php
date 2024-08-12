@extends('admin.layout.main')

@section('content-admin')
  <div class="container-fluid">
    <div class="nk-content-inner">
      <div class="nk-content-body">
        <div class="nk-block">
          <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
              <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Berita</h3>
              </div>
              <div class="nk-block-head-content">
                <li class="nk-block-tools-opt"><a href="{{ url('dashboard/news/create') }}" class="btn btn-primary"><em
                      class="icon ni ni-plus"></em><span>Tambah</span></a></li>
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
                            <th>Berita</th>
                            <th>Tanggal Dibuat</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                            $no = 1;
                          @endphp
                          @foreach ($data as $item)
                            <tr>
                              <td>{{ $no++ }}</td>
                              <td>{{ $item->name }}</td>
                              <td>{{ timesInd($item->created_at) }}</td>
                              <td class="text-center">
                                <div class="drodown">
                                  <a href="javascript:void(0);" disabled class="dropdown-toggle btn btn-icon btn-trigger"
                                    data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                  <div class="dropdown-menu dropdown-menu-end">
                                    <ul class="link-list-opt no-bdr">
                                      <li><a href="{{ url('dashboard/news/' . $item->slug . '/edit') }}"><em
                                            class="icon ni ni-pen"></em><span>Ubah</span></a></li>
                                      <li><a href="javascript:void(0);" data-url="news"
                                          data-identity={{ $item->slug }}class="hapus"><em
                                            class="icon ni ni-trash"></em><span>Hapus</span></a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </td>
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
  @push('customJs')
    <script src="{{ asset('admin/custom/js/delete.js') }}"></script>
  @endpush
@endsection
