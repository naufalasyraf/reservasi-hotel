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
                    <center>Isi Data</center>
                </div>
            <form action="aksi_tambah_reservasi.php" method="post">
            <div class="hotel_booking_area position-center">

                <div class="container">
                    <div class="hotel_booking_table ">
                        <div class="col">
                        <div class="col-md-8">
                            <div class="boking_table">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="book_tabel_item">
                                            <?php 
                                            include 'koneksi.php';
                                            $nama = mysqli_query($db,"SELECT * FROM pelanggan join kamar WHERE nama='$_GET[nama]'");
                                            $dnama = mysqli_fetch_assoc($nama)?>
                                            <div>
                                                <label for="idkamar" class="form-label">Id Kamar</label>
                                                <input type="number" name="idkamar" class="form-control" id="idkamar" placeholder="idkamar" readonly="true" value = "<?= $_GET['idkamar']?>">
                                            </div>
                                            <div>
                                                <label for="nama" class="form-label">ID Pelanggan</label>
                                                <input type="text" name="idpelanggan" class="form-control" id="idpelanggan" placeholder="idpelanggan" readonly="true" value = "<?= $dnama['idpelanggan']?>">
                                            </div>
                                            
                                            <div class="book_tabel_item">
                                                <label for="tglcheckin" class="form-label">Tanggal Check In</label>
                                                <input type="date" name="tglcheckin" class="form-control" id="tglcheckin">
                                            </div>
                                            <div class="book_tabel_item">
                                                <label for="tglcheckout" class="form-label">Tanggal Check Out</label>
                                                <input type="date" name="tglcheckout" class="form-control" id="tglcheckout">
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