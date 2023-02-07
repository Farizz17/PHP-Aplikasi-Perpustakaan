<?php

require_once("Koneksi.php");
$idbuku = $_GET["id"];
// echo $id;

$query = mysqli_query($koneksi , "DELETE FROM buku WHERE idbuku = '$idbuku'");

if ($query){
    header('location:Tabelbuku.php');
    // echo "berhasil dihapus";
} else{
    echo "data tidak terhapus";
}

?>