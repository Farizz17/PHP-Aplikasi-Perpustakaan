<?php

require_once("Koneksi.php");

$nis = $_POST['nis'];

header ("location:Peminjaman.php?nis=$nis");

?>