<?php
session_start();

include "koneksi.php";
$username = $_POST["username"];
$p = $_POST["password"];

$sql = "select * from user where username = '".$username."' and password='".$p."'limit 1";
$hasil = mysqli_query ($db,$sql);
$jumlah = mysqli_num_rows($hasil);


    if ($jumlah>0){
        $row = mysqli_fetch_assoc($hasil);
        $_SESSION["username"]=$row["username"];
        $_SESSION["password"]=$row["password"];
        $_SESSION["email"]=$row["email"];

        header("location:index2.php");
    }else{
        echo "username atau password salah <br><a href='index.php'>kembali</a>";
    }
    ?>