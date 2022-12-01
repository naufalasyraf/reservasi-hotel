<!doctype html>
<html lang="en">
    <body>
        <br>
        <br>
        <br>
<div class="container"></div>

    <br>
    <div class="col">
    <div class="row-md-5">
        <table class="table table-striped table-hover">
            <tr>
                <th>No</th>
                <th>Id Kamar</th>
                <th>Nama Kamar</th>
                <th>Tipe Kamar</th>
                <th>Harga</th>
            </tr>
            <?php

            include 'koneksi.php';
            $no_urut=1;
            $data = mysqli_query($db, "SELECT* FROM  kamar join jenis_kamar using(idjeniskamar)");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $no_urut++; ?></td>
                    <td><?php echo $d['idkamar']; ?></td>
                    <td><?php echo $d['nama_kamar']; ?></td>
                    <td><?php echo $d['jenis']; ?></td>
                    <td><?php echo $d['harga']; ?></td>
                    <td>
                </td>
                </tr>

                <?php
                }
                ?>
        </table>
        <a href="index2.php?p=pelanggan" class="btn btn-warning md-3">Kembali</a>
        </div>
    </div>
</div>
            </body>
            </html>