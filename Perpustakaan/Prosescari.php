<?php
require_once("Koneksi.php");
if (isset($_POST['cari'])) {

    $nis = $_POST['nis'];
    $nama = $_POST['nama'];

        $query = mysqli_query($koneksi, "SELECT nama FROM siswa");

        if ($query) {
            header('location:Datasiswa.php');
        } else {
            echo "gagal menyimpan data";
        }
    }


?>