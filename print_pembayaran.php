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
    <br>
    <br>
    <br>
    <h3><center>LAPORAN PEMBAYARAN CUSTOMER HOTEL GRAND ZURI</center></h3>
    <br>
    <body>
    <div class="container"></div>
    
    <div class="col">
    <div class="row-md-5">
        <table class="table table-striped table-hover">
            <tr>
                <th>No</th>
                <th>Id Pembayaran</th>
                <th>Nama</th>
                <th>Total Bayar</th>
                <th>Status</th>
            </tr>

            <?php
            include 'koneksi.php';
            $no_urut=1;
            $data = mysqli_query($db, "SELECT * FROM pembayaran WHERE idreservasi='$_GET[idreservasi]' ");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $no_urut++; ?></td>
                    <td><?php echo $d['idpembayaran']; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['total_bayar']; ?></td>
                    <td>LUNAS</td>
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