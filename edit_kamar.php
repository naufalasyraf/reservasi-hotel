<?php 
    include 'koneksi.php';
    $query = mysqli_query($db, "SELECT * FROM kamar");

    $r = mysqli_fetch_assoc($query);

?>
<div class="container">
    <div class="card">
        <center>
            <h5 class="card-header">Edit Data Kamar</h5>
        </center>
        <div class="card-body">
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="nama_kamar" class="form-label">Nama Kamar</label>
                    <input type="text" class="form-control" name="nama_kamar" id="nama_kamar" required  value="<?=$r['nama_kamar'] ?>">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" class="form-control" name="harga" id="harga" required  value="<?=$r['harga'] ?>">
                </div>
                
                <button type="submit" name="edit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
</div>

<?php

if (isset($_POST['edit'])) {

    $query = mysqli_query($db, "UPDATE kamar SET nama_kamar='$_POST[nama_kamar]', harga='$_POST[harga]' WHERE idkamar='$_GET[idkamar]'");

    if ($query) {
        echo "<script>alert('Data Berhasil di Edit')</script>";
        echo "<script>window.location='index2.php?p=list_kamar'</script>";
    } else {
        echo "<script>alert('Data Gagal di Edit')</script>";
    }
}

?>