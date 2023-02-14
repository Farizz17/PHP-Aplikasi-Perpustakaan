<?php
require_once("Koneksi.php");
if (isset($_POST['tambahsiswa'])) {

    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

        $query = mysqli_query($koneksi, "INSERT INTO siswa VALUES
        (null,'$nis','$nama','$kelas')");

        if ($query) {
            header('location:Datasiswa.php');
        } else {
            echo "gagal menyimpan data";
        }
    }


?>