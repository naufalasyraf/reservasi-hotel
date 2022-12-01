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
    <br>
    <br>
    <br>
    <h3><center>LAPORAN PENGUNJUNG HOTEL GRAND ZURI</center></h3>
    <br>
    <body>
    <div class="container"></div>
    
    <div class="col">
    <div class="row-md-5">
        <table class="table table-striped table-hover">
            <tr>
                <th>No</th>
                <th>Id Reservasi</th>
                <th>Id Kamar</th>
                <th>Nama Pelanggan</th>
                <th>Checkin</th>
                <th>Checkout</th>
                <th>Lama Menginap</th>
                <th>Total Bayar</th>
            </tr>

            <?php

            include 'koneksi.php';
            $no_urut=1;
            $data = mysqli_query($db, "SELECT * FROM  reservasi JOIN kamar USING(idkamar) JOIN pelanggan USING(idpelanggan)");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $no_urut++; ?></td>
                    <td><?php echo $d['idreservasi']; ?></td>
                    <td><?php echo $d['idkamar']; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d["tglcheckin"] = date('d-m-Y', strtotime($d["tglcheckin"])); ?></td>
                    <td><?php echo $d["tglcheckout"] = date('d-m-Y', strtotime($d["tglcheckout"])); ?></td>
                    <td><?php
                                $awal  = date_create($d["tglcheckin"] );
                                $akhir = date_create($d["tglcheckout"]);
                                $diff  = date_diff( $awal, $akhir );
                                echo $diff->d . ' Hari ';
                                ?></td>
                    <td><?php echo $d['harga']*$diff->d; 
                    
                    ?></td>
                </td>
                </tr>

                <?php
                }
                ?>
        </table>
    </div>
    </div>
</div>
<script type="text/javascript">
	window.print();

  function PreviewImage() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

    oFReader.onload = function (oFREvent) {
      document.getElementById("uploadPreview").src = oFREvent.target.result;
    };
  };
</script>
            </body>
            </html>