<?php
session_start();
$errors = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validasi username
    if (empty($username)) {
        $errors['username'] = 'Harus terisi';
    }

    // Validasi password
    if (empty($password)) {
        $errors['password'] = 'Harus terisi';
    } elseif (strlen($password) > 6) {
        $errors['password'] = 'Password maksimal 6 karakter';
    } elseif (!preg_match('/[A-Z]/', $password) || !preg_match('/[a-z]/', $password)) {
        $errors['password'] = 'Password harus terdiri dari huruf besar dan kecil';
    }

    if (empty($errors)) {
        $correct_username = "admin";
        $correct_password = "Pas123";

        if ($username === $correct_username && $password === $correct_password) {
            $_SESSION['username'] = $username;
            header("Location: php/home.php");
            exit;
        } else {
            $errors['login'] = 'Username atau password salah';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Laundry Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container-fluid vh-100">
    <div class="row h-100">

        <!-- Bagian kiri untuk gambar dengan margin -->
<div class="col-md-7 d-none d-md-block p-0" style="padding: 40px;">
    <div class="h-100 d-flex justify-content-center align-items-center" style="margin: 30px; margin-top: 5px; margin-bottom: 5px;">
        <img src="images/4.jpg" class="img-fluid" alt="Company Logo" style="max-width: 100%; height: 90%; border-radius: 10px;">
    </div>
</div>

        <!-- Bagian kanan untuk form login -->
        <div class="col-md-5 d-flex align-items-center justify-content-center">
            <div class="login-form p-5 border rounded bg-white shadow-sm" style="max-width: 400px; width: 100%; margin-right:40px;">
                <!-- <a href="#" class="text-muted small mb-3 d-block">&lt; Back to website</a> -->
                <h2 class="text-center mb-2 fw-bold">Welcome!</h2>
                <h2 class="text-center mt-0">Laundry Service</h2>


                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Usename</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?php echo isset($username) ? $username : ''; ?>">
                        <small class="text-danger"><?php echo isset($errors['username']) ? $errors['username'] : ''; ?></small>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        <small class="text-danger"><?php echo isset($errors['password']) ? $errors['password'] : ''; ?></small>
                    </div>
                    <?php if (isset($errors['login'])): ?>
                        <div class="alert alert-danger"><?php echo $errors['login']; ?></div>
                    <?php endif; ?>
                    <div class="d-flex justify-content-between mb-4">
                        <a href="#" class="text-muted small">Forgot password?</a>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 mb-3">Log in</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>
