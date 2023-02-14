<?php
require_once("Koneksi.php");

$nomorpeminjaman = $_POST['siswa'] . "-" . date('Y-m-d');
$buku = $_POST['buku'];
$siswa = $_POST['siswa'];
$tanggalpinjam = date('Y-m-d');
$tanggalkembali = $_POST['tanggalkembali'];

// echo $nomorpinjam, "||||", $buku, "||||", $siswa, "||||", $tanggalkembali, "||||", $tanggalpinjam;

$query = mysqli_query($koneksi, "INSERT INTO pinjam VALUES
('$nomorpeminjaman', '$buku', '$siswa', '$tanggalpinjam', '$tanggalkembali')");

if ($query){
    header("location:Peminjaman.php");
}
?>