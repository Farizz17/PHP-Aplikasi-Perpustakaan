<?php
session_start();
require_once("Koneksi.php");

    $username = $_POST['username'];
    $password = md5($_POST['password']);

$query = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username' AND password = '$password'");

$datauser = mysqli_fetch_object($query);
$data = mysqli_num_rows($query);

// echo $data;

if ($data > 0){
    $_SESSION['login'] = 1;
    $_SESSION['nama'] = $datauser -> username;
    $_SESSION['level'] = $datauser -> level;
    header('location:Perpustakaan.php');
} else {
    header('location:Login.php?err=gagallogin');
}
?>