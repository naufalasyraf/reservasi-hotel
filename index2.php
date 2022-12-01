<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="image/logo.png" type="image/png">
        <title>Grand Zuri Hotel</title>
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
        
        <!--================Header Area =================-->
        <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.php"><img src="image/logo11.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="index2.php?p=home">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="index2.php?p=list_kamar">List Kamar</a></li>
                            <li class="nav-item"><a class="nav-link" href="index2.php?p=laporan_reservasi">Laporan Pengunjung</a></li> 
                            <li class="nav-item"><a class="nav-link" href="index2.php?p=data_pengunjung">Data Pengunjung</a></li> 
                            
                            
                            <li class="nav-item"><a class="nav-link" href="index.php">Logout</a></li>
                        </ul>
                    </div> 
                </nav>
            </div>
        </header>
        
        <div class="col">
    <?php
        $p=isset($_GET['p']) ? $_GET['p'] : 'home';
        if ($p=='home') include('home.php');
        if ($p=='booking') include('booking.php');
        if ($p=='edit_kamar') include('edit_kamar.php');
        if ($p=='pelanggan') include('pelanggan.php');
        if ($p=='pesankamar') include('pesankamar.php');
        if ($p=='logout') include('logout.php');
        if ($p=='registrasi') include('registrasi.php');
        if ($p=='list_kamar') include('kamar.php');
        if ($p=='tambah_kamar') include('tambah_kamar.php');
        if ($p=='kamar') include('viewkamar.php');
        if ($p=='reservasi') include('reservasi.php');
        if ($p=='hapus_kamar') include('hapus_kamar.php');
        if ($p=='contact') include('contact.php');
        if ($p=='about') include('about.php');
        if ($p=='laporan_reservasi') include('laporan_reservasi.php');
        if ($p=='form') include('form.php');
        if ($p=='pembayaran') include('pembayaran.php');
        if ($p=='konfirmasi_pembayaran') include('konfirmasi_pembayaran.php');
        if ($p=='end') include('ending.php');
        if ($p=='data_pengunjung') include('data_reservasi.php');
        if ($p=='hapus_reservasi') include('hapus_reservasi.php');

    ?>           
    </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>