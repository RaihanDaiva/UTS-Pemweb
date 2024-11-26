<?php
session_start(); // Mulai sesi
include("koneksi.php");
$query_pasien = "SELECT id_pasien, nama_pasien FROM pasien";
$result_pasien = $koneksi->query($query_pasien);

$query_dokter = "SELECT id_dokter, nama_dokter FROM dokter";
$result_dokter = $koneksi->query($query_dokter);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RST - Tabel Rekam Medis</title>
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
                            <a href="pembayaran.php" class="dropdown-item">Pembayaran</a>
                            <a href="rekam_medis.php" class="dropdown-item active">Rekam Medis</a>

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
    <div class="content" style="height: 120vh">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand bg-light navbar-light px-4 py-3" style="border-bottom-left-radius: 10px;
">
            <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
                <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
            </a>
            <div class="bg-light rounded d-flex align-items-center justify-content-between gap-3 ">
                <i class="fa-solid fa-file-medical fa-3x text-primary"></i>
                <h1 style="margin-bottom: 0px;" class="text-primary ">Tabel Rekam Medis</h1>
            </div>

            <div class="navbar-nav align-items-center ms-auto">
                <div class="nav-item dropdown">
                    <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0">Profile updated</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0">New user added</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0">Password changed</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item text-center">See all notifications</a>
                    </div>
                </div>
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

        <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "select * from rekam_medis where id_rekam_medis='$id'");
        while ($d = mysqli_fetch_array($data)) {
            ?>
            <div class="d-flex justify-content-center mt-5">
                <form method="post" action="update.php" class="text-dark bg-light bg-gradient p-5 rounded-3" style="box-shadow: 0px 0px 22px 0px rgba(0,0,0,0.22);
-webkit-box-shadow: 0px 0px 22px 0px rgba(0,0,0,0.22);
-moz-box-shadow: 0px 0px 22px 0px rgba(0,0,0,0.22);">
                    <h1 class="text-primary mb-5 d-flex justify-content-center">Ubah Data</h1>
                    <table>
                        <input type="hidden" name="action" value="updateRekamMedis">
                        <tr>
                            <td class>No Pasien</td>
                            <td><input type="hidden" name="id_rekam_medis" value="<?php echo $d['id_rekam_medis']; ?>">
                                <select type="form-select" class="form-control" name="id_pasien" id="id_pasien"
                                    value="<?php echo $d['id_pasien']; ?>" required>
                                    <option value="">Pilih Pasien</option>
                                    <?php
                                    // Loop untuk menampilkan data id_pasien dalam <option>
                                    while ($row = $result_pasien->fetch_assoc()) {
                                        echo "<option value='" . $row['id_pasien'] . "'>" . $row['id_pasien'] . " - " . $row['nama_pasien'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>No Dokter</td>
                            <td>
                                <select type="form-select" class="form-control" name="id_dokter" id="id_dokter" value="<?php echo $d['id_dokter']; ?>" required>
                                    <option value="">Pilih Dokter</option>
                                    <?php
                                    // Loop untuk menampilkan data id_pasien dalam <option>
                                    while ($row = $result_dokter->fetch_assoc()) {
                                        echo "<option value='" . $row['id_dokter'] . "'>" . $row['id_dokter'] . " - " . $row['nama_dokter'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Diagnosa</td>
                            <td><input type="text" class="form-control" name="diagnosa"
                                    value="<?php echo $d['diagnosa']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Tanggal Kunjungan</td>
                            <td><input type="date" class="form-control" name="tanggal_kunjungan"
                                    value="<?php echo $d['tanggal_kunjungan']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Tindakan Medis</td>
                            <td><input type="text" class="form-control" name="tindakan_medis"
                                    value="<?php echo $d['tindakan_medis']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Obat Diberikan</td>
                            <td><input type="text" class="form-control" name="obat_diberikan"
                                    value="<?php echo $d['obat_diberikan']; ?>"></td>
                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td class="pt-3">
                                <div class="d-flex justify-content-center gap-2 ">
                                    <a>
                                        <input style="width:100px;" type="submit"
                                            class="btn border border-primary  btn-block btns-hover" value="SIMPAN">

                                    </a>
                                    <br>

                                    <a><input style="width:100px;" type="button"
                                            class=" btn border-danger btn-block btnb-hover " value="BATAL"
                                            onclick="window.location.href='rekam_medis.php';"></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>

                        </tr>
                    </table>
            </div>
            </form>
            <?php
        }
        ?>



        <!-- Form Ubah Start -->

        <!-- Form Ubah End -->

    </div>


    <!-- Content End -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->

</body>

<style>
    .btns-hover:hover {
        background-color: #009cff;
        color: #fff;
        transition: background-color 0.3s ease;
    }

    .btnb-hover:hover {
        background-color: #dc3545;
        color: #fff;
        transition: background-color 0.3s ease;
    }

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
</style>

</html>