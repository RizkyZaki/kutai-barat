@csrf

<div class="row">
  <div class="col-md-6">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $data['name'] ?? '' }}"
        onkeyup="createTextSlug()" id="name" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
      @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror

    </div>
  </div>
  <div class="col-md-6">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Slug <small class="text-danger">Slug Bisa
          Disesuaikan</small></label>
      <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" id="slug"
        value="{{ $data['slug'] ?? '' }}" id="exampleInputEmail1" aria-describedby="emailHelp">
      @error('slug')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
  </div>
  <div class="col-md-12">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Foto Landscape </label>
      <input type="file" class="form-control @error('landscape') is-invalid @enderror" name="landscape"
        value="{{ $data['landscape'] ?? '' }}" id="landscape" aria-describedby="emailHelp" accept="image/*">
      @error('landscape')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Foto Potrait </label>
      <input type="file" class="form-control @error('potrait') is-invalid @enderror" name="potrait"
        value="{{ $data['potrait'] ?? '' }}" id="potrait" aria-describedby="emailHelp" accept="image/*">
      @error('potrait')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
  </div>

</div>


<div class="mb-3">
  <label for="inputText">Deskripsi</label>
  <input type="hidden" name="description" id="description" value="{{ $data['description'] ?? '' }}">
  <trix-editor class="@error('description') is-invalid @enderror" input="description"></trix-editor>
  @error('description')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>
<button class="btn btn-primary">Simpan</button>
@push('customJs')
  <script>
    function createTextSlug() {
      var name = $('#name').val();
      $('#slug').val(generateSlug(name));
    }

    function generateSlug(text) {
      return text.toString().toLowerCase()
        .replace(/^-+/, '')
        .replace(/-+$/, '')
        .replace(/\s+/g, '-')
        .replace(/\-\-+/g, '-')
        .replace(/[^\w\-]+/g, '');
    }
  </script>
@endpush
