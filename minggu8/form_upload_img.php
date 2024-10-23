<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unggah File Gambar</title>
</head>
<body>
    <form id="upload-form" action="upload_ajax_img.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="files[]" id="file" multiple>
        <input type="submit" name="submit" value="Unggah">
    </form>

    <div class="status"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="upload_img.js"></script> 
</body>
</html>
