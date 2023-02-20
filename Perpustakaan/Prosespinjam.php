<?php
require_once("Koneksi.php");

$nomorpeminjaman = $_POST['siswa'] . "-" . date('Y-m-d');
$buku = $_POST['buku'];
$nis = $_POST['siswa'];
$tanggalpinjam = date('Y-m-d');
$tanggalkembali = $_POST['tanggalkembali'];

// echo $nomorpinjam, "||||", $buku, "||||", $siswa, "||||", $tanggalkembali, "||||", $tanggalpinjam;

$query = mysqli_query($koneksi, "INSERT INTO pinjam VALUES
('$nomorpeminjaman', '$buku', '$nis', '$tanggalpinjam', '$tanggalkembali')");

if ($query){
    header("location:Peminjaman.php");
}

// if(isset($_POST['cari'])){
//     $query = mysqli_query($koneksi, "SELECT * FROM siswa");
//     if ($query){
//         header('location:Peminjaman.php');
//     }
// }
?>