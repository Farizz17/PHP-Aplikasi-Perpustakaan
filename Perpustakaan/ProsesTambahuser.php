<?php
require_once("Koneksi.php");
if (isset($_POST['tambahusers'])) {

    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $level = $_POST['level'];

        $query = mysqli_query($koneksi, "INSERT INTO users VALUES
        (null,'$username','$password','$level')");

        if ($query) {
            header('location:Tabelusers.php');
        } else {
            echo "gagal menyimpan data";
        }
    }


?>