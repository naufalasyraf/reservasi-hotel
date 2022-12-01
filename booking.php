<!doctype html>
<html lang="en">
    
    <body>
        <?php
include "koneksi.php";
$ambil = mysqli_query($db, "SELECT * FROM pelanggan WHERE nama='$_GET[nama]' ");
$data = mysqli_fetch_array($ambil);
?>
        <div class="jumbotron text-center">
            <h1>SELAMAT DATANG <?php echo strtoupper($data['nama']);?> <br> SILAHKAN PESAN KAMAR ANDA</h1>
</div>  
        <!--================ Accomodation Area  =================-->
        <section class="accomodation_area section_gap">
            <div class="container">
                
                <div class="section_title text-center">
                    <h2 class="title_color">Pilihan Jenis Kamar</h2>
                </div>
                <div class="row mb_30">
                <?php
                      include 'koneksi.php';
                      $no_urut=1;
                      $data = mysqli_query($db, "SELECT* FROM jenis_kamar");
                      while ($d = mysqli_fetch_array($data)) {
                ?>
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="image/ruangan2.jpg" alt="" height="300px" width="500px">
                                <a href="index2.php?p=pesankamar&idjeniskamar=<?php echo $d['idjeniskamar']; ?>&nama=<?php echo $_GET['nama'];?>" class="btn theme_btn button_hover">Pesan</a>
                            </div>
                           <h4 class="sec_h4"><?php echo $d['jenis']; ?></h4>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
                </section>
    </body>
</html>