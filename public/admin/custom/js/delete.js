let csrfToken = $('meta[name="csrf-token"]').attr("content");
$(document).on("click", ".hapus", function (e) {
  e.preventDefault();
  let identity = $(this).data("identity");
  let urlDel = $(this).data("url");
  let row = $(this).closest("tr");

  Swal.fire({
    title: "Apa Anda Yakin?!",
    text: "Anda tidak akan dapat mengembalikan ini!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#d33",
    cancelButtonColor: "#3085d6",
    confirmButtonText: "Hapus",
    cancelButtonText: "Batal",
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        // url: "{{ route('category.destroy', '') }}/" + slug,
        url: "/dashboard/" + urlDel + "/" + identity,
        type: "DELETE",
        data: {
          _token: csrfToken,
        },
        success: function (response) {
          if (response.status === "true") {
            row.remove();
            Swal.fire(response.title, response.description, response.icon);
          } else {
            Swal.fire(response.title, response.description, response.icon);
          }
        },
        error: function () {
          Swal.fire("Gagal", "Terjadi kesalahan saat menghapus.", "error");
        },
      });
    }
  });
});
