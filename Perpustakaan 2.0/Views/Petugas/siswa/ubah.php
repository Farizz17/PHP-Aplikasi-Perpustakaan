<h5>Form Ubah Pengguna</h5>
<hr style="height: 12px; background-color: black; border-radius: 10px;">

<?php
// $userid = $_GET['id'];
$ubh = $perpus->tampilubahsiswa(@$_GET['id']);
?>

<form action="Routes/proses.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">

    <input type="hidden" name="id" value="<?= $_GET['id']; ?>" id="">

        <label for="">NISN :</label>
            <input class="form-control" type="text" name="nisn" value="<?= $ubh->nisn ?>"><br>

                <label for="">Nama :</label>
                <input class="form-control" type="text" name="nama" value="<?= $ubh->nama ?>"><br>

                <label for="">Kelas :</label>
                <input class="form-control" type="text" name="kelas" value="<?= $ubh->kelas ?>"><br>

                <label for="">Foto :</label>
                <input class="form-control" type="file" name="foto"><br>

            <input class="btn btn-success form-control" type="submit" name="ubahsiswa" id="">

        <a class="btn btn-danger" href="dashboard.php?pages=siswa">Kembali</a>
    </div>
</form>

<?php

?>