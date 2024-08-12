let baseUrl = "/dashboard/slider";
$(document).on("click", ".tambah", function (e) {
  e.preventDefault();
  $("#modal-tambah").modal("show");
});

$(document).on("click", ".add", function (e) {
  // console.log('test');
  let name = $('#modal-tambah input[name="name"]').val();
  let imageInput = $('#modal-tambah input[name="image"]')[0]; // Ambil input file
  let image = imageInput.files[0]; // Ambil file yang dipilih

  // Buat FormData untuk mengirim data termasuk file
  let formData = new FormData();
  formData.append("name", name);
  formData.append("image", image);

  $.ajax({
    url: baseUrl,
    method: "POST",
    data: formData,
    processData: false, // Hindari pemrosesan data secara otomatis
    contentType: false,
    headers: {
      "X-CSRF-TOKEN": csrfToken,
    },
    success: function (data) {
      if (data.status == "true") {
        $("#modal-tambah").modal("hide");
        Swal.fire(data.title, data.description, data.icon).then(function () {
          location.reload();
        });
      } else {
        Swal.fire(data.title, data.description, data.icon);
      }
    },
  });

  return false;
});
$(document).on("click", ".edit", function (e) {
  e.preventDefault();
  let id = $(this).data("id");

  // Mengambil data Video yang akan diperbarui
  $.ajax({
    url: baseUrl + "/" + id + "/edit",
    method: "GET",
    success: function (response) {
      if (response.status === "true") {
        let pengumuman = response.tag;
        $('#modal-ubah input[name="name"]').val(pengumuman.name);

        // Menyimpan slug asli sebelum pembaruan
        $('#modal-ubah input[name="id"]').val(pengumuman.id);

        $("#modal-ubah").modal("show");
      } else {
        Swal.fire(
          "Gagal",
          "Terjadi kesalahan saat mengambil data Slider.",
          "error"
        );
      }
    },
    error: function () {
      Swal.fire(
        "Gagal",
        "Terjadi kesalahan saat mengambil data Slider.",
        "error"
      );
    },
  });
});

$(document).on("click", ".update", function (e) {
  e.preventDefault();

  let name = $('#modal-ubah input[name="name"]').val();
  let id = $('#modal-ubah input[name="id"]').val();
  let imageInput = $('#modal-ubah input[name="image"]')[0]; // Ambil input file
  let image = imageInput.files[0]; // Ambil file yang dipilih
  let formData = new FormData();
  formData.append("name", name);
  formData.append("_method", "PUT");
  // formData.append('image', image);
  if (image) {
    formData.append("image", image);
  }
  $.ajax({
    url: baseUrl + "/" + id,
    method: "POST",
    data: formData,
    processData: false, // Hindari pemrosesan data secara otomatis
    contentType: false,
    headers: {
      "X-CSRF-TOKEN": csrfToken,
    },
    success: function (data) {
      if (data.status === "true") {
        Swal.fire({
          title: data.title,
          text: data.description,
          icon: data.icon,
        }).then(function () {
          location.reload();
        });
        $("#modal-ubah").modal("hide");
      } else {
        Swal.fire({
          title: data.title,
          text: data.description,
          icon: data.icon,
        });
      }
    },
    error: function () {
      Swal.fire({
        title: "Error",
        text: "Terjadi kesalahan saat mengubah Slider.",
        icon: "error",
      });
    },
  });

  return false;
});
