<?php

require_once("Koneksi.php");
$id = $_GET["id"];
// echo $id;

$query = mysqli_query($koneksi , "DELETE FROM users WHERE id = '$id'");

if ($query){
    header('location:Tabelusers.php');
    // echo "berhasil dihapus";
} else{
    echo "data tidak terhapus";
}

?>