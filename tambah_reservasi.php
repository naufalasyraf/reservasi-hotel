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
                    <center>Tambah Reservasi</center>
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
                                            
                            
                                            <div class="book_tabel_item">
                                                <label for="tglcheckin" class="form-label">Tanggal Check In</label>
                                                <input type="date" name="tglcheckin" class="form-control" id="tglcheckin">
                                            </div>
                                            <div class="book_tabel_item">
                                                <label for="tglcheckout" class="form-label">Tanggal Check Out</label>
                                                <input type="date" name="tglcheckout" class="form-control" id="tglcheckout">
                                            </div>
                                            <div class="book_tabel_item">
                                                <label for="lama_menginap" class="form-label">Lama Menginap</label>
                                                <input type="text" name="lama_menginap" class="form-control" id="lama_menginap" placeholder="hari">
                                            </div>
                                            <div class="book_tabel_item">
                                                <label for="total_bayar" class="form-label">Total Bayar</label>
                                                <input type="total_bayar" name="total_bayar" class="form-control" id="total_bayar" placeholder="Rp.">
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
