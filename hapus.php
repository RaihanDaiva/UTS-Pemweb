<?php
// koneksi database
include 'koneksi.php';

// Fungsi untuk menghapus data dokter
function deleteDokter($koneksi, $id_dokter)
{
    // Hapus data terkait di tabel dokter_perawat terlebih dahulu
    $query_delete_dokter_perawat = "DELETE FROM dokter_perawat WHERE id_dokter = '$id_dokter'";
    mysqli_query($koneksi, $query_delete_dokter_perawat);

    // Hapus data terkait di tabel rekam_medis terlebih dahulu
    $query_delete_rekam_medis = "DELETE FROM rekam_medis WHERE id_dokter = '$id_dokter'";
    mysqli_query($koneksi, $query_delete_rekam_medis);

    // Lalu hapus data di tabel dokter
    $query_delete_dokter = "DELETE FROM dokter WHERE id_dokter = '$id_dokter'";
    mysqli_query($koneksi, $query_delete_dokter);
}

// Fungsi untuk menghapus data perawat
function deletePerawat($koneksi, $id_perawat)
{
    // Lalu hapus data di tabel perawat
    $query_delete_perawat = "DELETE FROM perawat WHERE id_perawat = '$id_perawat'";
    mysqli_query($koneksi, $query_delete_perawat);
}
function deletePasien($koneksi, $id_pasien)
{
    // Lalu hapus data di tabel perawat
    $query_delete_perawat = "DELETE FROM pasien WHERE id_pasien = '$id_pasien'";
    mysqli_query($koneksi, $query_delete_perawat);
}
function deletePembayaran($koneksi, $id_pembayaran)
{
    // Lalu hapus data di tabel perawat
    $query_delete_pembayaran = "DELETE FROM pembayaran WHERE id_pembayaran = '$id_pembayaran'";
    mysqli_query($koneksi, $query_delete_pembayaran);
}
function deleteRekamMedis($koneksi, $id_rekam_medis)
{
    // Lalu hapus data di tabel perawat
    $query_delete_rekam_medis = "DELETE FROM rekam_medis WHERE id_rekam_medis = '$id_rekam_medis'";
    mysqli_query($koneksi, $query_delete_rekam_medis);
}
function deleteAdministrasi($koneksi, $id_admin)
{
    // Lalu hapus data di tabel perawat
    $query_delete_admin = "DELETE FROM administrasi WHERE id_admin = '$id_admin'";
    mysqli_query($koneksi, $query_delete_admin);
}

// Mengecek apakah ada parameter id yang dikirimkan melalui URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_GET['type']) && $_GET['type'] == 'dokter') {
        deleteDokter($koneksi, $id);
        header("Location: dokter.php");  // Ubah ke halaman yang sesuai
        exit;
    } else if (isset($_GET['type']) && $_GET['type'] == 'perawat') {
        deletePerawat($koneksi, $id);
        header("Location: perawat.php");  // Ubah ke halaman yang sesuai
        exit;
    } else if (isset($_GET['type']) && $_GET['type'] == 'pasien') {
        deletePasien($koneksi, $id);
        header("Location: pasien.php");  // Ubah ke halaman yang sesuai
        exit;
    } else if (isset($_GET['type']) && $_GET['type'] == 'pembayaran') {
        deletePembayaran($koneksi, $id);
        header("Location: pembayaran.php");  // Ubah ke halaman yang sesuai
        exit;
    } else if (isset($_GET['type']) && $_GET['type'] == 'rekam_medis') {
        deleteRekamMedis($koneksi, $id);
        header("Location: rekam_medis.php");  // Ubah ke halaman yang sesuai
        exit;
    } else if (isset($_GET['type']) && $_GET['type'] == 'admin') {
        deleteAdministrasi($koneksi, $id);
        header("Location: administrasi.php");  // Ubah ke halaman yang sesuai
        exit;
    }
}

// Tutup koneksi
$koneksi->close();
?>