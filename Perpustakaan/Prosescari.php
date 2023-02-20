<?php

require_once("Koneksi.php");

$nis = $_POST['nis'];
$nama = $_POST['nama'];

header ("location:Peminjaman.php?nis=$nis");

?>