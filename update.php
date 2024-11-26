<?php
include 'koneksi.php';

function updateDokter($koneksi, $id_dokter, $nama_dokter, $nomor_lisensi, $spesialisasi, $jadwal_praktek, $kontak)
{
    // Siapkan query update
    $query = "UPDATE dokter SET nama_dokter=?, nomor_lisensi=?, spesialisasi=?, jadwal_praktek=?, kontak=? WHERE id_dokter=?";
    $stmt = $koneksi->prepare($query);

    // Bind parameter
    $stmt->bind_param("sssssi", $nama_dokter, $nomor_lisensi, $spesialisasi, $jadwal_praktek, $kontak, $id_dokter);

    // Eksekusi query dan cek keberhasilan
    if ($stmt->execute()) {
        // Redirect ke halaman dokter.php
        header("location:dokter.php");
        exit;
    } else {
        echo "Gagal mengupdate data dokter: " . $stmt->error;
    }
}
function updatePerawat($koneksi, $id_perawat, $nama_perawat, $nomor_lisensi, $jadwal_kerja, $pengalaman, $kontak)
{
    // Siapkan query update
    $query = "UPDATE perawat SET nama_perawat=?, nomor_lisensi=?, jadwal_kerja=?, pengalaman=?, kontak=? WHERE id_perawat=?";
    $stmt = $koneksi->prepare($query);

    // Bind parameter
    $stmt->bind_param("sssssi", $nama_perawat, $nomor_lisensi, $jadwal_kerja, $pengalaman, $kontak, $id_perawat);

    // Eksekusi query dan cek keberhasilan
    if ($stmt->execute()) {
        // Redirect ke halaman perawat.php
        header("location:perawat.php");
        exit;
    } else {
        echo "Gagal mengupdate data perawat: " . $stmt->error;
    }
}
function updatePasien($koneksi, $id_pasien, $nama_pasien, $tanggal_lahir, $jenis_kelamin, $alamat, $no_telp, $riwayat_penyakit, $riwayat_pengobatan)
{
    // Siapkan query update
    $query = "UPDATE pasien SET nama_pasien=?, tanggal_lahir=?, jenis_kelamin=?, alamat=?, no_telp=?, riwayat_penyakit=?, riwayat_pengobatan=? WHERE id_pasien=?";
    $stmt = $koneksi->prepare($query);

    // Bind parameter
    $stmt->bind_param("sssssssi", $nama_pasien, $tanggal_lahir, $jenis_kelamin, $alamat, $no_telp, $riwayat_penyakit, $riwayat_pengobatan, $id_pasien);

    // Eksekusi query dan cek keberhasilan
    if ($stmt->execute()) {
        // Redirect ke halaman perawat.php
        header("location:pasien.php");
        exit;
    } else {
        echo "Gagal mengupdate data pasien: " . $stmt->error;
    }
}
function updatePembayaran($koneksi, $id_pembayaran)
{
    // Lalu hapus data di tabel perawat
    $query_update_status_pembayaran = "UPDATE pembayaran SET status_pembayaran = 'Lunas' WHERE id_pembayaran = $id_pembayaran";
    mysqli_query($koneksi, $query_update_status_pembayaran);

    // // Menggunakan prepared statement
    // $query_update_status_pembayaran = "UPDATE pembayaran SET status_pembayaran = ? WHERE id_pembayaran = ?";
    // $stmt = mysqli_prepare($koneksi, $query_update_status_pembayaran);

    // // Bind parameter
    // mysqli_stmt_bind_param($stmt, "si", $status_pembayaran, $id_pembayaran);

    // // Eksekusi query
    // mysqli_stmt_execute($stmt);

    // // Periksa apakah ada perubahan baris
    // if (mysqli_stmt_affected_rows($stmt) > 0) {
    //     echo "Status pembayaran berhasil diperbarui.";
    // } else {
    //     echo "Gagal memperbarui status pembayaran atau tidak ada perubahan.";
    // }

    // // Tutup statement
    // mysqli_stmt_close($stmt);
}
function updateRekamMedis($koneksi, $id_rekam_medis, $id_pasien, $id_dokter, $diagnosa, $format_tgl, $tindakan_medis, $obat_diberikan)
{
    // Siapkan query update
    $query = "UPDATE rekam_medis SET id_pasien=?, id_dokter=?, diagnosa=?, tanggal_kunjungan=?, tindakan_medis=?, obat_diberikan=? WHERE id_rekam_medis=?";
    $stmt = $koneksi->prepare($query);

    // Bind parameter
    $stmt->bind_param("ssssssi", $id_pasien, $id_dokter, $diagnosa, $format_tgl, $tindakan_medis, $obat_diberikan, $id_rekam_medis);

    // Eksekusi query dan cek keberhasilan
    if ($stmt->execute()) {
        // Redirect ke halaman perawat.php
        header("location:rekam_medis.php");
        exit;
    } else {
        echo "Gagal mengupdate data rekam medis: " . $stmt->error;
    }
}
function updateAdministrasi($koneksi, $id_admin, $nama_admin, $jadwal_kerja, $kontak)
{
    // Siapkan query update
    $query = "UPDATE administrasi SET nama_admin=?, jadwal_kerja=?, kontak=? WHERE id_admin=?";
    $stmt = $koneksi->prepare($query);

    // Bind parameter
    $stmt->bind_param("sssi", $nama_admin, $jadwal_kerja, $kontak, $id_admin);

    // Eksekusi query dan cek keberhasilan
    if ($stmt->execute()) {
        // Redirect ke halaman perawat.php
        header("location:administrasi.php");
        exit;
    } else {
        echo "Gagal mengupdate data administrasi: " . $stmt->error;
    }
}

// Ambil data dari form dan panggil fungsi updateDokter
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['action'] == 'updateDokter') {
        $id_dokter = $_POST['id_dokter'];
        $nama_dokter = $_POST['nama_dokter'];
        $nomor_lisensi = $_POST['nomor_lisensi'];
        $spesialisasi = $_POST['spesialisasi'];
        $jadwal_praktek = $_POST['jadwal_praktek'];
        $kontak = $_POST['kontak'];
        // Panggil fungsi updateDokter
        updateDokter($koneksi, $id_dokter, $nama_dokter, $nomor_lisensi, $spesialisasi, $jadwal_praktek, $kontak);
    } else if ($_POST['action'] == 'updatePerawat') {
        $id_perawat = $_POST['id_perawat'];
        $nama_perawat = $_POST['nama_perawat'];
        $nomor_lisensi = $_POST['nomor_lisensi'];
        $jadwal_kerja = $_POST['jadwal_kerja'];
        $pengalaman = $_POST['pengalaman'];
        $kontak = $_POST['kontak'];
        updatePerawat($koneksi, $id_perawat, $nama_perawat, $nomor_lisensi, $jadwal_kerja, $pengalaman, $kontak);

    } else if ($_POST['action'] == 'updatePasien') {
        $id_pasien = $_POST['id_pasien'];
        $nama_pasien = $_POST['nama_pasien'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $no_telp = $_POST['no_telp'];
        $riwayat_penyakit = $_POST['riwayat_penyakit'];
        $riwayat_pengobatan = $_POST['riwayat_pengobatan'];
        updatePasien($koneksi, $id_pasien, $nama_pasien, $tanggal_lahir, $jenis_kelamin, $alamat, $no_telp, $riwayat_penyakit, $riwayat_pengobatan);



    // } else if (isset($_GET['type']) && $_GET['type'] == 'pembayaran') {
    //     $id_pembayaran = $_GET['id'];
    //     $status_pembayaran = 'Lunas'; // Tentukan nilai status baru di sini

    //     // Panggil fungsi untuk memperbarui status pembayaran
    //     updatePembayaran($koneksi, $status_pembayaran, $id_pembayaran);

    //     // Redirect ke halaman pembayaran setelah proses update selesai
    //     header("Location: pembayaran.php");
    //     exit;

    } else if ($_POST['action'] == 'updateRekamMedis') {
        $id_rekam_medis = $_POST['id_rekam_medis'];
        $id_pasien = $_POST['id_pasien'];
        $id_dokter = $_POST['id_dokter'];
        $diagnosa = $_POST['diagnosa'];
        $tanggal_kunjungan = $_POST['tanggal_kunjungan'];
        $format_tgl = date("Y-m-d", strtotime($tanggal_kunjungan));
        $tindakan_medis = $_POST['tindakan_medis'];
        $obat_diberikan = $_POST['obat_diberikan'];
        updateRekamMedis($koneksi, $id_rekam_medis, $id_pasien, $id_dokter, $diagnosa, $format_tgl, $tindakan_medis, $obat_diberikan);
    } else if ($_POST['action'] == 'updateAdministrasi') {
        $id_admin = $_POST['id_admin'];
        $nama_admin = $_POST['nama_admin'];
        $jadwal_kerja = $_POST['jadwal_kerja'];
        $kontak = $_POST['kontak'];
        updateAdministrasi($koneksi, $id_admin, $nama_admin, $jadwal_kerja, $kontak);
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_GET['type']) && $_GET['type'] == 'pembayaran') {
        $id_pembayaran = $id;
        updatePembayaran($koneksi, $id_pembayaran);
        header("Location: pembayaran.php");  // Ubah ke halaman yang sesuai
        exit;
    }
}

// Tutup koneksi
$koneksi->close();
?>