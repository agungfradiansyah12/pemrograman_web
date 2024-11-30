<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" rel="stylesheet" />

    
  </head>
  <body>
    <div class="main-container d-flex">
      <!-- Sidebar -->
      <div class="sidebar" id="side_nav">
        <div class="header-box px-xl-5 pt-3 pb-4 d-flex justify-content-between">
          <img alt="Logo E-Tatib" src="../img/logo.svg" />
          <button class="btn d-md-none d-block close-btn px-1 py-0 text-dark">
            <i class="fas fa-stream"></i>
          </button>
        </div>

        <ul class="list-unstyled px-2">
          <li><a href="dashboard.php" class="text-decoration-none px-3 py-2 d-block fw-bold"><i class="fas fa-home"></i> Dashboard</a></li>
          <li>
            <a href="dataPelanggaran.php" class="text-decoration-none px-3 py-2 d-block fw-bold"><i class="fas fa-book"></i> Data Pelanggaran</a>
          </li>
          <li><a href="cetakSurat.php" class="text-decoration-none px-3 py-2 d-block fw-bold"><i class="fas fa-print"></i> Cetak Surat</a></li>
          <li class="active"><a href="informasi.php" class="text-decoration-none px-3 py-2 d-block fw-bold"><i class="fas fa-info-circle"></i> Informasi</a></li>
        </ul>
      </div>

      <!-- Content -->
      <div class="content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-light py-2">
          <div class="container-fluid">
            <div class="d-flex align-items-center w-100">
              <button class="btn px-0 py-0 open-btn">
                <i class="fas fa-stream me-2 d-md-none"></i>
              </button>
              <span class="fw-medium" style="font-size: 28px">Data Pelanggaran</span>
              <div class="d-flex ms-auto">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://storage.googleapis.com/a1aa/image/FtvDbWB7gJokEhNTBerbmicp5kpveNPyvg5Ske9guwNUgQmnA.jpg" alt="User Profile Picture" class="rounded-circle" width="50" height="50" />
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                    <li><a class="dropdown-item" href="#change-password">Ganti Password</a></li>
                    <li><a class="dropdown-item" href="#logout">Logout</a></li>
                  </ul>
                </li>
              </div>
            </div>
          </div>
        </nav>

        <!-- Dashboard Content -->
        <div class="content px-3 pt-3">
        <div class="input-group">
            <div class="form-outline" data-mdb-input-init>
              <input type="search" id="form1" class="form-control" placeholder="Search" />
            </div>
            <button type="button" class="btn btn-detail" data-mdb-ripple-init>
              <i class="fas fa-search"></i>
            </button>
          </div>

          <div class="table-responsive my-4">
            <table class="table table-bordered table-hover" id="tabel-awal">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Pelanggaran</th>
                  <th>Tingkat</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Merokok di kawasan kampus</td>
                  <td>1</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Merusak sarana dan prasarana</td>
                  <td>2</td>
                </tr>
              </tbody>
            </table>
          </div>
    </div>
      </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <script>
      $(".sidebar ul li").on("click", function () {
        $(".sidebar ul li.active").removeClass("active");
        $(this).addClass("active");
      });

      $(".open-btn").on("click", function () {
        $(".sidebar").addClass("active");
      });

      $(".close-btn").on("click", function () {
        $(".sidebar").removeClass("active");
      });
    </script>
  </body>
</html>

