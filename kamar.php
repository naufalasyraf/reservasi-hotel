<!doctype html>
<html lang="en">
    <body>
        <br>
        <br>
        <br>
<div class="container"></div>
    <div class="col md-5">
        <a href="tambah_kamar.php" class="btn btn-primary mt-3">Tambah Data Kamar</a>
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
                    <a href="index2.php?p=edit_kamar&idkamar=<?php echo $d['idkamar']; ?>" class="btn btn-sm btn-primary">Edit</a>
                    <a href="index2.php?p=hapus_kamar&&idkamar=<?php echo $d['idkamar']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
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