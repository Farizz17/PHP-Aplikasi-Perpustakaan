<?php


// INI ADALAH KONEKSI KE DATABASE
require_once("Koneksi.php");

// MEGAMBIL DATA DARI DATABASE
$query = mysqli_query($koneksi,"SELECT * FROM buku");
// print_r($query);

// $data DIGUNAKAN UNTUK MENAMPUNG DATA DARI DATABASE DALAM BENTUK ARRAY
$data = mysqli_fetch_array($query);
// $data2 = mysqli_fetch_row($query);
// $data3 = mysqli_fetch_object($query);

print_r($data);
// print_r($data2);
// print_r($data3);

echo "<br><br>";

// CARA MENGGUNAKAN OBJECT
// echo $data3 -> judul . "<br>";
// echo $data3-> penulis;
// CARA MENGGUNAKAN OBJECT

// print($data["1"]);
// print($data["judul"]);

echo "<br><br>";

// print($data[""]);
// echo "<center><img src = images/{$data["gambar"]} width=300></center>";




?>