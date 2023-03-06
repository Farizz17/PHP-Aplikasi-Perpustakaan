<h5>Form Ubah Pengguna</h5>
<hr style="height: 12px; background-color: black; border-radius: 10px;">

<?php
// $userid = $_GET['id'];
$ubh = $perpus->tampilubah(@$_GET['id']);
?>

<form action="Routes/proses.php" method="POST">
    <div class="form-group">

    <input type="hidden" name="id" value="<?= $_GET['id']; ?>" id="">

        <label for="">Nama :</label>
            <input class="form-control" type="text" name="username" value="<?= $ubh->username ?>"><br>

                <label for="">Password :</label>
                <input class="form-control" type="password" name="password"><br>

            <input class="btn btn-success form-control" type="submit" name="ubahusers" id="">

        <a class="btn btn-danger" href="dashboard.php?pages=users">Kembali</a>
    </div>
</form>

<?php

?>