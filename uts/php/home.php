<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Laundry Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/StyleSlideShow.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <style>
        
        body {
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center; /* Center the content vertically */
        }

        .logout-button {
            text-align: center;
            background-color: black;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 30px;
            text-decoration: none;
            height: auto;
            width: 100px;
            display: inline-block;
    }
    </style>
    <script>
        var i = 0;
        $(document).ready(function () {
            $(".slidertitle").css({ background: "black" });
            $(".slidertitle, #slider img").hide();
            showNextImage();
            setInterval(showNextImage, 3000);
        });

        function showNextImage() {
            i++;
            $("#SliderImage" + i)
                .appendTo("#slider")
                .fadeIn(1100)
                .delay(1100)
                .fadeOut(1100);

            $("#title" + i)
                .appendTo("#slider")
                .fadeIn(1100)
                .delay(1100)
                .fadeOut(1100);

            if (i == 3) {
                i = 0;
            }
        }
    </script>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#" style="font-size: 24px">Laundry Service</a> <!-- Menebalkan nama brand -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cek_harga.php">Cek Harga</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link logout-button" href="logout.php">Logout</a> <!-- Tombol Logout -->
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <div class="row" style="height: 150px;">
        <div class="col-md-8 d-flex align-items-center">
            <div>
                <h3 style="color: black; font-weight: bold;">Selamat datang <?php echo $_SESSION['username']; ?></h3> <!-- Teks tebal dan hitam -->
                <p style="color: black;">Kami siap melayani semua kebutuhan laundry Anda dengan harga yang terjangkau dan kualitas terbaikKami siap melayani semua kebutuhan laundry Anda dengan harga k.</p>
            </div>
        </div>
        <div class="col-md-4 d-flex flex-column align-items-start justify-content-center">
            <p class="text-dark mb-2" >Jangan lewatkan penawaran spesial hari ini! Jangan lewatkan penawaran spesial hari ini!</p>
            <a href="cek_harga.php" class="btn btn-custom text-white">Cek Harga</a>
        </div>
    </div>
</div>

<!-- Slider -->
<div id="slider" class="container mt-4">
    <img src="../images/1.jpg" id="SliderImage1" alt="foto 1">
    <img src="../images/2.jpg" id="SliderImage2" alt="foto 2">
    <img src="../images/3.jpg" id="SliderImage3" alt="foto 3">
</div>



<!-- Profil Laundry -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2 style="color: black; font-weight: bold;">Profil Laundry Service</h2> <!-- Teks tebal dan hitam -->
            <p style="color: black;">
                Selamat datang di Laundry Service! Kami menyediakan layanan cuci pakaian terbaik dengan teknologi terbaru. 
                Kepuasan pelanggan adalah prioritas utama kami. Dengan layanan yang cepat, bersih, dan harga yang terjangkau, 
                Laundry Service siap melayani kebutuhan Anda sehari-hari.
            </p>
            <p style="color: black;">
                Kami melayani berbagai jenis cucian seperti pakaian, selimut, gorden, dan lainnya. Dengan pengalaman yang terpercaya 
                serta tenaga kerja profesional, kami memastikan pakaian Anda akan kembali dalam kondisi bersih dan rapi.
            </p>
        </div>
    </div>
</div>


<!-- Footer -->
<footer class="bg-footer text-center text-lg-start mt-5" >
    <div class="text-center p-3">
        &copy; 2024 Laundry Service. All Rights Reserved.
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>