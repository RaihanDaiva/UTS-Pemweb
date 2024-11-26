<?php
session_start(); // Mulai sesi

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RST - Tabel Pembayaran</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/808ba9c7d8.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="#" class="navbar-brand mx-4 mb-3">
                    <i class="text-primary d-flex justify-content-center fa-solid fa-hospital fa-3x pb-3"></i>
                    <h3 class="text-primary">Rumah Sakit<br class="ms-4">Terpadu</h3>
                </a>

                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link">
                        <i class="fa fa-tachometer-alt me-2"></i>Dashboard
                    </a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">
                            <i class="fa fa-table me-2"></i>Tables
                        </a>
                        <div class="dropdown-menu show bg-transparent border-0">
                            <a href="pasien.php" class="dropdown-item">Pasien</a>
                            <a href="pembayaran.php" class="dropdown-item active">Pembayaran</a>
                            <a href="rekam_medis.php" class="dropdown-item">Rekam Medis</a>

                            <!-- Dropdown Pegawai -->
                            <p class="dropdown-item dropdown d-flex flex-row" style="margin-bottom:0px; gap:70px;">
                                Pegawai <i class="bi bi-chevron-up"></i></p>
                            <div class="dropdown-submenu show bg-transparent border-0">
                                <a href="dokter.php" class="dropdown-item" style="margin-left:10px ;">Dokter</a>
                                <a href="perawat.php" class="dropdown-item" style="margin-left:10px ;">Perawat</a>
                                <a href="administrasi.php" class="dropdown-item" style="margin-left:10px ;">Kasir</a>
                            </div>


                            <!-- Akhir Dropdown Pegawai -->

                        </div>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="signin.html" class="dropdown-item">Sign In</a>
                        <a href="signup.html" class="dropdown-item">Sign Up</a>
                        <a href="404.html" class="dropdown-item">404 Error</a>
                        <a href="blank.html" class="dropdown-item">Blank Page</a>
                    </div>
                </div>
        </div>
        </nav>
        <div style="position: absolute; bottom: 29px;">
            Copyright &copy; 2024 <a href="#">Rumah Sakit Terpadu</a>,
        </div>
    </div>

    <!-- Sidebar End -->


    <!-- Content Start -->
    <div class="content" style="max-height: 100vh">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand bg-light navbar-light px-4 py-3" style="border-bottom-left-radius: 10px;
">
            <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
                <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
            </a>
            <div class="bg-light rounded d-flex align-items-center justify-content-between gap-3 ">
                <i class="fa-solid fa-cash-register fa-3x text-primary"></i>
                <h1 style="margin-bottom: 0px;" class="text-primary ">Tabel Pembayaran</h1>
            </div>

            <div class="navbar-nav align-items-center ms-auto">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <!-- <span class="d-none d-lg-inline-flex">John Doe</span> -->
                        <span
                            class="d-none d-lg-inline-flex"><?php echo isset($_SESSION['nama']) ? $_SESSION['nama'] : 'Guest'; ?></span>
                    </a>
                    <div
                        class="dropdown-menu dropdown-menu-end bg-light rounded-0 rounded-bottom m-0 text-primary border-top-0">
                        <a href="formlogin.php" class="dropdown-item">Log Out</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->


        <!-- Table Start -->
        <div class="container-fluid pt-4 px-4">
            <section class="intro">
                <div class="bg-image h-100">
                    <div class="mask d-flex align-items-center h-100">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="card" style="box-shadow: 0px 0px 22px 0px rgba(0,0,0,0.22);
-webkit-box-shadow: 0px 0px 22px 0px rgba(0,0,0,0.22);
-moz-box-shadow: 0px 0px 22px 0px rgba(0,0,0,0.22);">
                                        <div class="card-body p-0">
                                            <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true"
                                                style="position: relative; height: auto">
                                                <table class="table table-striped mb-0">
                                                    <thead style="background-color: #002d72;">
                                                        <tr class="judul-tabel">
                                                            <th scope="col">No</th>
                                                            <th scope="col">Waktu Pembayaran</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Jumlah</th>
                                                            <th scope="col">Metode</th>
                                                            <th scope="col">No Pasien</th>
                                                            <th scope="col">No Kasir</th>
                                                            <th scope="col">Aksi</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        include 'koneksi.php';

                                                        // Query untuk mendapatkan data pembayaran beserta nama pasien dari tabel pasien
                                                        $query = "SELECT pembayaran.*, 
                                                                    CONCAT(pasien.id_pasien, ' - ', pasien.nama_pasien) AS pasien_info, 
                                                                    CONCAT(administrasi.id_admin, ' - ', administrasi.nama_admin) AS admin_info 
                                                                    FROM pembayaran
                                                                    INNER JOIN pasien ON pembayaran.id_pasien = pasien.id_pasien
                                                                    INNER JOIN administrasi ON pembayaran.id_admin = administrasi.id_admin";
                                                        $data = $koneksi->query($query);

                                                        // Cek apakah query berhasil
                                                        if (!$data) {
                                                            die("Query gagal: " . mysqli_error($koneksi));
                                                        }

                                                        $no = 1;
                                                        while ($d = $data->fetch_assoc()) {
                                                            ?>
                                                            <tr class="data">
                                                                <td class="text-dark"><?php echo $no++; ?></td>
                                                                <td class="text-dark">
                                                                    <?php echo $d['waktu_pembayaran']; ?>
                                                                </td>
                                                                <td
                                                                    class="<?php echo ($d['status_pembayaran'] == 'Belum') ? 'text-danger' : 'text-success'; ?>">
                                                                    <?php echo $d['status_pembayaran']; ?>
                                                                </td>
                                                                <td class="text-dark">
                                                                    <?php echo "Rp " . number_format($d['jumlah_pembayaran'], 0, ',', '.'); ?>
                                                                </td>
                                                                <td class="text-dark">
                                                                    <?php echo $d['metode_pembayaran']; ?>
                                                                </td>
                                                                <!-- Menampilkan id_pasien beserta nama pasien dalam satu kolom -->
                                                                <td class="text-dark" style="text-align: center;">
                                                                    <?php echo $d['pasien_info']; ?>
                                                                </td>
                                                                <td class="text-dark" style="text-align: center;">
                                                                    <?php echo $d['admin_info']; ?>
                                                                </td>
                                                                <td>
                                                                    <?php if ($d['status_pembayaran'] != 'Lunas'): ?>
                                                                        <a href="update.php?id=<?php echo $d['id_pembayaran']; ?>&type=pembayaran"
                                                                            role="button" class="btn btn-success">
                                                                            <i class="fa-solid fa-check"></i>
                                                                        </a>
                                                                    <?php endif; ?>
                                                                    <a role="button" class="btn btn-danger"
                                                                        href="hapus.php?id=<?php echo $d['id_pembayaran']; ?>&type=pembayaran"><i
                                                                            class="fa-solid fa-trash"></i></a>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                        }
                                                        ?>
                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            </table>
            <!-- Tambah Data -->
            <form method="POST" action="tambah_pembayaran.php">
                <div class="d-flex justify-content-end mt-3">
                    <button type="input" class="btn btn-lg btn-primary btn-lg-square"
                        style="position: fixed; bottom: 20px; right: 120px; z-index: 1000;">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </div>

            </form>


        </div>
        <!-- Table End -->

    </div>

    <!-- Content End -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script th, .table td {
        border-right: 1px solid black;
    }>
        <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->

</body>

<style>
    .custom-mb {
        margin-bottom: 300px;
    }

    html,
    body,
    .intro {
        height: 100%;
    }

    table td,
    table th {
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
    }

    thead th {
        color: #fff;
    }

    .card {
        border-radius: .5rem;
    }

    .table-scroll {
        border-radius: .5rem;
    }

    .table-scroll table thead th {
        font-size: 1.25rem;
    }

    thead {
        top: 0;
        position: sticky;
    }

    ::after table {
        padding: 20px;
    }

    tr,
    th,
    td {
        padding: 10px;
        margin: 20px;
    }

    .data td {
        text-align: center;
    }

    .judul-tabel th {
        text-align: center;
    }
</style>

</html>