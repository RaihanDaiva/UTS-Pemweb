<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$phone = $_POST['phone'];
// menginput data ke database
mysqli_query($koneksi,"insert into user(nama, username, password, no_telp) values('$nama','$username','$password','$phone')");
 
// mengalihkan halaman kembali ke index.php
header("location:formlogin.php");
 
?>
