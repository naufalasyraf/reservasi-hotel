<?php
include 'koneksi.php';
// Koneksi Database


$idkamar = $_POST['idkamar'];
$idpelanggan = $_POST['idpelanggan'];
$tglcheckin = $_POST['tglcheckin'];
$tglcheckin = date('Y-m-d', strtotime($tglcheckin));
$tglcheckout = $_POST['tglcheckout'];
$tglcheckout = date('Y-m-d', strtotime($tglcheckout));


// menangkap data yang dikirim dari form

mysqli_query($db, "insert into reservasi(idreservasi,idkamar,idpelanggan,tglcheckin,tglcheckout) 
values(NULL,'$idkamar','$idpelanggan','$tglcheckin','$tglcheckout')");
//menginput data ke database
header("location:reservasi.php?idpelanggan=$_POST[idpelanggan]");
//mengalihkan halaman kembali ke tampil_data.php
?>