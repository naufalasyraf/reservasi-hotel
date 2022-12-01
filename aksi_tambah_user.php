<?php
include 'koneksi.php';
// Koneksi Database

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// menangkap data yang dikirim dari form

mysqli_query($db, "insert into user(username,password,email) values('$username','$password','$email')");
//menginput data ke database
header("location:index.php");
//mengalihkan halaman kembali ke tampil_data.php
?>