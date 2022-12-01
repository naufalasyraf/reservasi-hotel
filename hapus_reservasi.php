<?php 
include 'koneksi.php';
    $query = mysqli_query($db, "DELETE FROM reservasi WHERE idreservasi = '".$_GET['idreservasi']."' ");
    if($query){
        echo "<script>alert('Data Berhasil di Hapus')</script>";
        echo "<script>location ='index2.php?p=data_pengunjung'</script>";
    }else{
        echo "<script>alert('Data Gagal di Hapus')</script>";
    }
?>