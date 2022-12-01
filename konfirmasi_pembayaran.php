<!doctype html>
<html lang="en">
    <br>
    <br>
    <br>
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
        <a href="print_pembayaran.php?idreservasi=<?php echo $_GET['idreservasi'];?>" class="btn btn-info col-md-15">Print</a>
        <a href="index2.php?p=end" class="btn btn-success col-md-15">Lanjut</a>
    </div>
    </div>
</div>
            </body>
            </html>