<!doctype html>
<html lang="en">
    <body>
    <div class="container">
    <div class="row md-5">
        <div class="col" >
            <div class="card">
                <div class="card-header">
                    <center> Data Pelanggan</center>
                </div>
            <form action="aksi_tambah_pelanggan.php" method="post">
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
                                                <label for="nama" class="form-label">Nama</label>
                                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
                                            </div>
                                            <div class="book_tabel_item">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" name="email" class="form-control" id="email" placeholder="admin@gmail.com">
                                            </div>
                                            <div class="book_tabel_item">
                                                <label for="telepon" class="form-label">Telepon</label>
                                                <input type="number" name="telepon" class="form-control" id="telepon" placeholder="Telepon">
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                    <div class="row-md-5">
                                            <button type="submit" name="submit" class="btn btn-success col-md-15">Simpan</button>
                                            <a href="index2.php?p=kamar" class="btn btn-info col-md-15">Lihat Kamar</a>
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