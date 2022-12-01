<?php
include 'koneksi.php';
// Koneksi Database


$nama_kamar = $_POST['nama_kamar'];
$jenis_kamar = $_POST['jenis_kamar'];
$harga= $_POST['harga'];
$status= $_POST['status'];

// menangkap data yang dikirim dari form

mysqli_query($db, "insert into kamar(idkamar,idjeniskamar,nama_kamar,harga) values(NULL,'$jenis_kamar','$nama_kamar','$harga')");
//menginput data ke database
header("location:index2.php?p=list_kamar");
//mengalihkan halaman kembali ke tampil_data.php
?>