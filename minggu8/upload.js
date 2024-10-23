$(document).ready(function () {
  $("#upload-form").submit(function (e) {
    e.preventDefault();

    var formData = new FormData(this);

    $.ajax({
      url: "upload_ajax_img.php",
      type: "POST",
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      success: function (response) {
        $("#upload-response").html(response);
      },
      Error: function () {
        $("#status").html("Terjadi kesalahan saat mengungah file.");
      },
    });
  });
});
