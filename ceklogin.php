Storage low … 13% left of your 5 GB individual storage. To prevent interruptions, free up space or talk to your
administrator.
ceklogin.php

// session_start();
// include 'koneksi.php';

// // menangkap data yang dikirim dari form login
// $username = $_POST['username'];
// $password = $_POST['password'];

// // menyeleksi data pada tabel admin dengan username dan password yang sesuai
// $data = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' and password='$password'");

// // menghitung jumlah data yang ditemukan
// $cek = mysqli_num_rows($data);


// if($cek > 0){
//     $_SESSION['username'] = $username;
//     $_SESSION['status'] = "login";
//     header("location:index.php");
// }
// else{
//     echo "<script> alert ('login gagal ! username dan password tidak benar ');</script>";
//     echo "<script> window.location ='formlogin.php';</script>";
// }

<?php
session_start(); // Mulai sesi

include 'koneksi.php';
// Koneksi ke database (ganti dengan informasi yang sesuai)
$host = 'localhost';
$db = 'proyekpbd';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil username dan password dari form
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Query untuk memverifikasi pengguna
    $stmt = $conn->prepare("SELECT nama FROM user WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password); // Gunakan parameter untuk mencegah SQL Injection
    $stmt->execute();
    $stmt->store_result();

    // Cek jika pengguna ditemukan
    if ($stmt->num_rows > 0) {
        // Ambil nama pengguna
        $stmt->bind_result($nama);
        $stmt->fetch();

        // Simpan nama ke sesi
        $_SESSION['nama'] = $nama;

        // Redirect ke index.php
        header("Location: index.php");
        exit();
    } else {
        echo "Username atau password salah!";
    }

    $stmt->close();
}
$conn->close();
?>