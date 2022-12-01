<?php
include 'koneksi.php';
// Koneksi Database


$nama = $_POST['nama'];
$email = $_POST['email'];
$telepon= $_POST['telepon'];

// menangkap data yang dikirim dari form

mysqli_query($db, "insert into pelanggan(idpelanggan,nama,email,telepon) values(NULL,'$nama','$email','$telepon')");
//menginput data ke database
header("location:index2.php?p=booking&nama=$nama ");
//mengalihkan halaman kembali ke tampil_data.php
?>