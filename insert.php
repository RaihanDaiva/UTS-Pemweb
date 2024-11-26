<?php
// Koneksi ke database
include 'koneksi.php';

// Fungsi untuk memasukkan data ke tabel dokter
function insertDokter($koneksi, $nama, $spesialisasi, $nomor_lisensi, $kontak, $jadwal_praktek)
{
    // Siapkan query dengan parameter untuk menghindari SQL Injection
    $query = "INSERT INTO dokter (nama_dokter, spesialisasi, nomor_lisensi, kontak, jadwal_praktek) VALUES (?, ?, ?, ?, ?)";
    $stmt = $koneksi->prepare($query);

    // Bind parameter ke dalam statement
    $stmt->bind_param("sssss", $nama, $spesialisasi, $nomor_lisensi, $kontak, $jadwal_praktek);

    // Eksekusi query dan cek keberhasilan
    if ($stmt->execute()) {
        // Mengalihkan halaman kembali ke dokter.php
        header("location:dokter.php");
        exit;
    } else {
        // Tampilkan pesan error jika query gagal
        echo "Gagal menambahkan data dokter: " . $stmt->error;
    }
}
function insertPerawat($koneksi, $nama, $nomor_lisensi, $jadwal_kerja, $pengalaman, $kontak)
{
    $query = "INSERT INTO perawat (nama_perawat, nomor_lisensi, jadwal_kerja, pengalaman, kontak) VALUES (?, ?, ?, ?, ?)";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param("sssss", $nama, $nomor_lisensi, $jadwal_kerja, $pengalaman, $kontak);
    if ($stmt->execute()) {
        header("location:perawat.php");
        exit;
    } else {
        echo "Gagal menambahkan data perawat: " . $stmt->error;
    }
}
function insertPasien($koneksi, $nama, $format_tgl, $jenis_kelamin, $alamat, $no_telp, $riwayat_penyakit, $riwayat_pengobatan)
{
    $query = "INSERT INTO pasien (nama_pasien, tanggal_lahir, jenis_kelamin, alamat, no_telp, riwayat_penyakit, riwayat_pengobatan) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param("sssssss", $nama, $format_tgl, $jenis_kelamin, $alamat, $no_telp, $riwayat_penyakit, $riwayat_pengobatan);
    if ($stmt->execute()) {
        header("location:pasien.php");
        exit;
    } else {
        echo "Gagal menambahkan data pasien: " . $stmt->error;
    }
}
function insertPembayaran($koneksi, $waktu_pembayaran, $status_pembayaran, $jumlah_pembayaran, $metode_pembayaran, $id_pasien, $id_admin)
{
    $query = "INSERT INTO pembayaran (waktu_pembayaran, status_pembayaran, jumlah_pembayaran, metode_pembayaran, id_pasien, id_admin) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param("ssssss", $waktu_pembayaran, $status_pembayaran, $jumlah_pembayaran, $metode_pembayaran, $id_pasien, $id_admin);
    if ($stmt->execute()) { 
        header("location:pembayaran.php");
        exit;
    } else {
        echo "Gagal menambahkan data pembayaran: " . $stmt->error;
    }
}
function insertRekamMedis($koneksi, $id_pasien, $id_dokter, $diagnosa, $format_tgl, $tindakan_medis, $obat_diberikan)
{
    $query = "INSERT INTO rekam_medis (id_pasien, id_dokter, diagnosa, tanggal_kunjungan, tindakan_medis, obat_diberikan) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param("ssssss", $id_pasien, $id_dokter, $diagnosa, $format_tgl, $tindakan_medis, $obat_diberikan);
    if ($stmt->execute()) {
        header("location:rekam_medis.php");
        exit;
    } else {
        echo "Gagal menambahkan data rekam_medis: " . $stmt->error;
    }
}
function insertAdministrasi($koneksi, $nama_admin, $jadwal_kerja, $kontak)
{
    $query = "INSERT INTO administrasi (nama_admin, jadwal_kerja, kontak) VALUES ( ?, ?, ?)";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param("sss", $nama_admin, $jadwal_kerja, $kontak);
    if ($stmt->execute()) {
        header("location:administrasi.php");
        exit;
    } else {
        echo "Gagal menambahkan data administrasi: " . $stmt->error;
    }
}



// Panggilan fungsi insertdokter
if (isset($_POST['type']) && $_POST['type'] == 'dokter') {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $spesialisasi = $_POST['spesialisasi'];
    $nomor_lisensi = $_POST['no_lisensi'];
    $kontak = $_POST['kontak'];
    $jadwal_praktek = $_POST['jadwal_praktek'];
    // Panggil fungsi insertDokter dengan data dari form
    insertDokter($koneksi, $nama, $spesialisasi, $nomor_lisensi, $kontak, $jadwal_praktek);
} else if (isset($_POST['type']) && $_POST['type'] == 'perawat') {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $nomor_lisensi = $_POST['no_lisensi'];
    $jadwal_kerja = $_POST['jadwal_kerja'];
    $pengalaman = $_POST['pengalaman'];
    $kontak = $_POST['kontak'];
    // Panggil fungsi insertDokter dengan data dari form
    insertPerawat($koneksi, $nama, $nomor_lisensi, $jadwal_kerja, $pengalaman, $kontak);
} else if (isset($_POST['type']) && $_POST['type'] == 'pasien') {
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tgl_lahir'];
    $format_tgl = date("Y-m-d", strtotime($tanggal_lahir));
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $riwayat_penyakit = $_POST['riwayat_penyakit'];
    $riwayat_pengobatan = $_POST['riwayat_pengobatan'];
    insertPasien($koneksi, $nama, $format_tgl, $jenis_kelamin, $alamat, $no_telp, $riwayat_penyakit, $riwayat_pengobatan);
} else if (isset($_POST['type']) && $_POST['type'] == 'pembayaran') {
    $tanggal = $_POST['tanggal'];
    $waktu = $_POST['waktu'];
    $waktu_pembayaran = $tanggal . ' ' . $waktu;
    $status_pembayaran = $_POST['status_pembayaran'];
    $jumlah_pembayaran = $_POST['jumlah_pembayaran'];
    $metode_pembayaran = $_POST['metode_pembayaran'];
    $id_pasien = $_POST['id_pasien'];
    $id_admin = $_POST['id_admin'];
    insertPembayaran($koneksi, $waktu_pembayaran, $status_pembayaran, $jumlah_pembayaran, $metode_pembayaran, $id_pasien, $id_admin);
} else if (isset($_POST['type']) && $_POST['type'] == 'rekam_medis') {
    $id_pasien = $_POST['id_pasien'];
    $id_dokter = $_POST['id_dokter'];
    $diagnosa = $_POST['diagnosa'];
    $tanggal_kunjungan = $_POST['tanggal_kunjungan'];
    $format_tgl = date("Y-m-d", strtotime($tanggal_kunjungan));
    $tindakan_medis = $_POST['tindakan_medis'];
    $obat_diberikan = $_POST['obat_diberikan'];
    insertRekamMedis($koneksi, $id_pasien, $id_dokter, $diagnosa, $format_tgl, $tindakan_medis, $obat_diberikan);
} else if (isset($_POST['type']) && $_POST['type'] == 'admin'){
    $nama_admin = $_POST['nama'];
    $jadwal_kerja = $_POST['jadwal'];
    $kontak = $_POST['kontak'];
    insertAdministrasi($koneksi, $nama_admin, $jadwal_kerja, $kontak);
}

$koneksi->close();
?>