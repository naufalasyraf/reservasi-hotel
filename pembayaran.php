<!doctype html>
<html lang="en">
    <body> 
    <div class="container">
    <div class="row md-5">
        <div class="col" >
            
            <form action="aksi_tambah_pembayaran.php" method="post">
            <div class="hotel_booking_area position-center">
        <BR>
        <BR>
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
                                            $nama = mysqli_query($db,"SELECT * FROM reservasi join pelanggan USING(idpelanggan) JOIN kamar USING(idkamar) WHERE  idpelanggan='$_GET[idpelanggan]' && idreservasi='$_GET[idreservasi]'");
                                            $dnama = mysqli_fetch_assoc($nama)?>
                                            <div>
                                                <label for="idreservasi" class="form-label">Id Reservasi</label>
                                                <input type="number" name="idreservasi" class="form-control" id="idreservasi" readonly="true" value = "<?= $_GET['idreservasi']?>">
                                            </div>
                                            <div>
                                                <label for="nama" class="form-label">Nama</label>
                                                <input type="text" name="nama" class="form-control" id="nama" readonly="true" value = "<?= $dnama['nama']?>">
                                            </div>
                                            <div>
                                                <?php $dnama["tglcheckin"] = date('d-m-Y', strtotime($dnama["tglcheckin"])); 
                                                 $dnama["tglcheckout"] = date('d-m-Y', strtotime($dnama["tglcheckout"])); 
                                                $awal  = date_create($dnama["tglcheckin"] );
                                                $akhir = date_create($dnama["tglcheckout"]);
                                                $diff  = date_diff( $awal, $akhir );
                                                $diff->d ;
                                                ?></td>
                                                <label for="total_bayar" class="form-label">Total Bayar</label>
                                                <input type="number" name="total_bayar" class="form-control" id="total_bayar" readonly="true" value = "<?= $dnama['harga']*$diff->d?>">
                                            </div>
                                            <div>
                                                <label for="norek" class="form-label">No Rekening</label>
                                                <input type="number" name="norek" class="form-control" id="norek" placeholder="xxxxxx">
                                            </div>
                                            <div>
                                                <label for="namarek" class="form-label">Nama Rekening</label>
                                                <input type="text" name="namarek" class="form-control" id="namarek" placeholder="Bank Indonesia">
                                            </div>
                                            <br>
                                        </div>
                                        <div class="row-md-5">
                                            <button type="submit" name="submit" class="btn btn-success col-md-15">Lanjut</button>
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