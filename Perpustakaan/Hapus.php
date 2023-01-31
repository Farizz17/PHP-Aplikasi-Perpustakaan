<?php

require_once("Koneksi.php");
$id = $_GET["id"];
// echo $id;

$query = mysqli_query($koneksi , "DELETE FROM buku WHERE idbuku = '$id'");

if ($query){
    header("location : Tabelbuku.php");
} else{
    echo "data tidak terhapus";
}

?>