<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
    exit;
}

$total = 0;
$diskon = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $berat = ceil($_POST['berat']); 
    $jenis = $_POST['jenis'];
    $kecepatan = $_POST['kecepatan'];
    $membership = $_POST['membership'];

    $harga_per_kg = 0;
    if ($jenis == "Cuci Kering") {
        $harga_per_kg = 5000;
    } elseif ($jenis == "Cuci Setrika") {
        $harga_per_kg = 8000;
    } elseif ($jenis == "Setrika") {
        $harga_per_kg = 6000;
    }

    $total = $harga_per_kg * $berat;

    if ($kecepatan == "Ekspress") {
        $total += 2000 * $berat;
    }

    if ($membership == "Member") {
        $diskon = 0.10 * $total; 
    }
    $total -= $diskon;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Harga - Laundry Service</title>
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/StyleSlideShow.css">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <style>
        html, body {
            height: 100%;
        }
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
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#" style="font-size: 24px">Laundry Service</a>
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
                    <a class="nav-link logout-button" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4 content">
    <h2 class="text-center">Cek Harga Laundry</h2>
    <form method="POST" action="">
        <div class="mb-3">
            <label for="berat" class="form-label">Berat (kg):</label>
            <input type="number" class="form-control" id="berat" name="berat" required>
        </div>
        <div class="mb-3">
            <label for="jenis" class="form-label">Jenis Layanan:</label>
            <select class="form-select" id="jenis" name="jenis" required>
                <option value="Cuci Kering">Cuci Kering</option>
                <option value="Cuci Setrika">Cuci Setrika</option>
                <option value="Setrika">Setrika</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="kecepatan" class="form-label">Kecepatan:</label>
            <select class="form-select" id="kecepatan" name="kecepatan" required>
                <option value="Reguler">Reguler</option>
                <option value="Ekspress">Ekspress</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="membership" class="form-label">Membership:</label>
            <select class="form-select" id="membership" name="membership" required>
                <option value="Non Member">Non Member</option>
                <option value="Member">Member</option>
            </select>
        </div>
    
        <button type="submit" class="btn" style="background-color: #466ed0; color: white;">CHECK</button>
    </form>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <div class="mt-4 mb-4">
            <h4 class="text-center">Hasil Perhitungan</h4>
            <div class="alert alert-info text-center">
                <p>Total Transaksi: Rp <?= number_format($total, 2, ',', '.') ?></p>
                <?php if ($diskon > 0): ?>
                    <p>Diskon (Member): Rp <?= number_format($diskon, 2, ',', '.') ?></p>
                <?php endif; ?>
                <p>Total yang Harus Dibayar: Rp <?= number_format($total, 2, ',', '.') ?></p>
            </div>
        </div>
    <?php endif; ?>
</div>

<footer class="bg-footer text-center text-lg-start mt-5">
    <div class="text-center p-3">
        &copy; 2024 Laundry Service. All Rights Reserved.
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>