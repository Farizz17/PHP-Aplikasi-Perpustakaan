<h5>Form Ubah Pengguna</h5>
<hr style="height: 12px; background-color: black; border-radius: 10px;">

<?php
// $userid = $_GET['id'];
$ubh = $perpus->tampilubahbuku(@$_GET['id']);
?>

<form action="Routes/proses.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">

    <input type="hidden" name="id" value="<?= $_GET['id']; ?>" id="">

        <label for="">Judul Buku :</label>
            <input class="form-control" type="text" name="judul" value="<?= $ubh->judul ?>"><br>

                <label for="">Deskripsi :</label>
                <input class="form-control" type="text" name="deskripsi" value="<?= $ubh->deskripsi ?>"><br>

                <label for="">Penulis :</label>
                <input class="form-control" type="text" name="penulis" value="<?= $ubh->penulis ?>"><br>

                <label for="">Penerbit :</label>
                <input class="form-control" type="text" name="penerbit" value="<?= $ubh->penerbit ?>"><br>

                <label for="">Cover :</label>
                <input class="form-control" type="file" name="cover"><br>

            <input class="btn btn-success form-control" type="submit" name="ubahbuku" id="">

        <a class="btn btn-danger" href="dashboard.php?pages=buku">Kembali</a>
    </div>
</form>

<?php

?>