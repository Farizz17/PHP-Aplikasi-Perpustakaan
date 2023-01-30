<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "perpustakaan";

$koneksi = mysqli_connect(
    $host,
    $user,
    $password,
    $database
);

// if($koneksi){
//     echo "koneksi berhasil :), <br> selamat datang {$user}!";
// } else {
//     echo "koneksi gagal" . mysqli_connect_error();
// }

?>