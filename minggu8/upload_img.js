$(document).ready(function () {
  $("#upload-form").submit(function (e) {
    e.preventDefault(); // Mencegah form dari pengiriman normal

    var formData = new FormData(this); // Mengambil data form

    $.ajax({
      url: "upload_ajax_img.php", // URL untuk mengunggah file
      type: "POST",
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      success: function (response) {
        $(".status").html(response); // Menampilkan respon dari server
      },
      error: function () {
        $(".status").html("Terjadi kesalahan saat mengunggah file."); // Menampilkan pesan kesalahan
      },
    });
  });
});
