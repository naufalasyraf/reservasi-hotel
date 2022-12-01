<!doctype html>
<html lang="en">
    
    <body>
<div class="container"></div>
    <div class="col md-5">
        <br>
        <br>
        <br>
        <h1>Pilih Jenis Kamar</h1>
    </div>
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
                
                <th>Action</th>
            </tr>

            <?php

            include 'koneksi.php';
            $idjeniskamar=$_GET['idjeniskamar'];
            $no_urut=1;
            $data = mysqli_query($db, "SELECT* FROM  kamar join jenis_kamar using(idjeniskamar) where idjeniskamar=$idjeniskamar");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $no_urut++; ?></td>
                    <td><?php echo $d['idkamar']; ?></td>
                    <td><?php echo $d['nama_kamar']; ?></td>
                    <td><?php echo $d['jenis']; ?></td>
                    <td><?php echo $d['harga']; ?></td>
                    <td>
                    <a href="index2.php?p=form&&idkamar=<?php echo $d['idkamar']; ?>&nama=<?php echo $_GET['nama'];?>" class="btn btn-sm btn-info">Pesan Sekarang</a>
                </td>
                </tr>

                <?php
                }
                ?>
        </table>
        </div>
    </div>
</div>
            </body>
            </html>