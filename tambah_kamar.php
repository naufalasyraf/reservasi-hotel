<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
    
    <div class="container">
    <div class="row md-5">
        <div class="col" >
            <div class="card">
                <div class="card-header">
                    <center>Tambah Kamar</center>
                </div>
            <form action="aksi_tambah_kamar.php" method="post">
            <div class="hotel_booking_area position-center">
                <div class="container">
                    <div class="hotel_booking_table ">
                        <div class="col">
                        <div class="col-md-8">
                            <div class="boking_table">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="book_tabel_item">
                                            
                                            <div class="book_tabel_item">
                                                <label for="nama_kamar" class="form-label">Nama Kamar</label>
                                                <input type="text" name="nama_kamar" class="form-control" id="nama_kamar" placeholder="Nama Kamar">
                                            </div>
                                            <label>Pilih Tipe Kamar :</label>
                        <select class="form-control" name="jenis_kamar">
                            <?php
                            include "koneksi.php";
                            //Perintah sql untuk menampilkan semua data pada tabel prodi
                            $sql="select * from jenis_kamar";
                            $hasil=mysqli_query($db,$sql);
                            $no=0;
                            while ($data = mysqli_fetch_array($hasil)) {
                            $no++;
                            $ket="";
                            if (isset($_GET['jenis_kamar'])) {
                            $prodi = trim($_GET['jenis_kamar']);
                            if ($prodi==$data['idjeniskamar'])
                            {
                                $ket="selected";
                            }
                            }
                            ?>
                                <option <?php echo $ket; ?> value="<?php echo $data['idjeniskamar'];?>">
                                <?php echo$data['jenis'];?></option>
                            <?php
                            }
                            ?>
                        </select>
                                            <div class="book_tabel_item">
                                                <label for="harga" class="form-label">Harga</label>
                                                <input type="number" name="harga" class="form-control" id="harga" placeholder="Harga">
                                            </div>
                                            
                                            <br>
                                        </div>
                                        <div class="row-md-5">
                                            <button type="submit" name="submit" class="btn btn-danger col-md-15">Simpan</button>
                                        </div>
                                    </div>
                                
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                </div>
            </div>
        </div>
</div>
    </div>
</div>
</body>
</html>