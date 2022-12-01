<?php
include 'koneksi.php';
// Koneksi Database


$idreservasi = $_POST['idreservasi'];
$nama = $_POST['nama'];
$norek = $_POST['norek'];
$namarek = $_POST['namarek'];
$total_bayar= $_POST['total_bayar'];

// menangkap data yang dikirim dari form

mysqli_query($db, "insert into pembayaran (idpembayaran,idreservasi,nama,norek,namarek,total_bayar) values(NULL,'$idreservasi','$nama','$norek','$namarek','$total_bayar')");
//menginput data ke database
header("location:index2.php?p=konfirmasi_pembayaran&idreservasi=$_POST[idreservasi]")
//mengalihkan halaman kembali ke tampil_data.php
?>