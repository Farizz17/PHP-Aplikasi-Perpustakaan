<?php

require_once("Koneksi.php");
$id = $_GET["id"];
// echo $id;

$query = mysqli_query($koneksi , "DELETE FROM siswa WHERE id = '$id'");

if ($query){
    header('location:Datasiswa.php');
    // echo "berhasil dihapus";
} else{
    echo "data tidak terhapus";
}

?>