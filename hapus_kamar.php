<?php 
include 'koneksi.php';
    $query = mysqli_query($db, "DELETE FROM kamar WHERE idkamar = '".$_GET['idkamar']."' ");
    if($query){
        echo "<script>alert('Data Berhasil di Hapus')</script>";
        echo "<script>location ='index2.php?p=list_kamar'</script>";
    }else{
        echo "<script>alert('Data Gagal di Hapus')</script>";
    }

?>