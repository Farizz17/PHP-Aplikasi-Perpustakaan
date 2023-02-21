<?php
require_once("koneksi.php");
$nopinjam =$_POST['id'] . "-" . date('Y-m-d');
$idbuku = $_POST['buku'];
$idsiswa = $_POST['id'];
$tglpinjam = date('Y-m-d');
$tglkembali = $_POST['tanggalkembali'];

$query = mysqli_query($koneksi , "INSERT INTO pinjam VALUES 
('$nopinjam','$idbuku','$idsiswa','$tglpinjam','$tglkembali')");


    if($query) {
        header('location:Peminjaman.php');
    }

if (isset($_POST['cari'])) {
    $query = mysqli_query($koneksi , "SELECT * FROM siswa" );
    if($query) {
        header('location:Peminjaman.php');
    }
}