@extends('admin.layout.main')

@section('content-admin')
  <div class="container-fluid">
    <div class="nk-content-inner">
      <div class="nk-content-body">

        <div class="nk-block nk-block-lg">
          <div class="nk-block-head">
            <div class="nk-block-head nk-block-head-sm">
              <div class="nk-block-between">
                <div class="nk-block-head-content">
                  <h4 class="nk-block-title">{{ $heading }}</h4>

                </div>
                <div class="nk-block-head-content">

                  <button class="btn btn-primary tambah"><em class="icon ni ni-plus"></em> <span> Tambah</span></button>
                </div>
              </div>
            </div>
          </div>
          <div class="card card-bordered card-preview">
            <div class="card-inner">
              <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                <thead>
                  <tr class="nk-tb-item nk-tb-head">
                    <th class="nk-tb-col nk-tb-col-check">
                      #
                    </th>
                    <th class="nk-tb-col">Nama</th>
                    <th class="nk-tb-col nk-tb-col-tools text-end"></th>
                  </tr>
                </thead>
                <tbody>
                  @php
                    $no = 1;
                  @endphp
                  @foreach ($slider as $item)
                    <tr class="nk-tb-item">
                      <td class="nk-tb-col">
                        {{ $no++ }}
                      </td>
                      <td class="nk-tb-col">{{ $item->name }}</td>
                      <td class="nk-tb-col nk-tb-col-tools">
                        <ul class="nk-tb-actions gx-1">
                          <li>
                            <div class="dropdown">
                              <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
                                data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                              <div class="dropdown-menu dropdown-menu-end">
                                <ul class="link-list-opt no-bdr">
                                  <li><a href="" data-id={{ $item->id }} data-name={{ $item->name }}
                                      class="edit"><em class="icon ni ni-pen"></em><span>Edit</span></a></li>
                                  <li><a href="" data-url="slider" data-identity={{ $item->id }}
                                      data-name={{ $item->name }} class="hapus"><em
                                        class="icon ni ni-trash"></em><span>Hapus</span></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </td>
                    </tr>
                  @endforeach

                </tbody>
              </table>
            </div><!-- .card-preview -->
          </div> <!-- nk-block -->
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Content Code -->
  <div class="modal fade" id="modal-tambah" tabindex="-1">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Form Tambah Slider</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" class="form-control " id="name" name="name" id="exampleInputEmail1"
              aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Foto</label>
            <input type="file" class="form-control " id="image" name="image" id="exampleInputEmail1"
              aria-describedby="emailHelp">
          </div>
          <button class="btn btn-primary add">Simpan</button>
        </div>
      </div>
    </div>
  </div><!-- End Basic Modal-->
  <div class="modal fade" id="modal-ubah" tabindex="-1">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Form Edit Slider</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" class="form-control " id="name" name="name" id="exampleInputEmail1"
              aria-describedby="emailHelp">
            <input type="hidden" name="id" id="id">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Foto Slider</label>
            <input type="file" class="form-control " id="image" name="image" id="exampleInputEmail1"
              aria-describedby="emailHelp">
          </div>
          <button class="btn btn-primary update">Simpan</button>
        </div>
      </div>
    </div>
  </div><!-- End Basic Modal-->
  @push('customJs')
    <script src="{{ asset('admin/custom/js/delete.js') }}"></script>
    <script src="{{ asset('admin/custom/js/slider.js') }}"></script>
  @endpush
@endsection
