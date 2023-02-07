<?php
require_once("Koneksi.php");
if (isset($_POST['ubah'])) {

    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];

    $namafile = $_FILES['gambar']['name'];
    $ukuran = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];

        if ($ukuran > 0 || $error == 0) {

            $move = move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/' . $namafile);

            if ($move) {
                echo "<br> File '$namafile' dengan ukuran $ukuran sudah ter-upload";
            } else {
                echo "terjadi kesalahan sewaktu mengupload file";
            }
        } else {
            echo "file gagal diupload karena : " . $error;
        }

        $query = mysqli_query($koneksi, "UPDATE buku SET
        judul = '$judul',
        deskripsi = '$deskripsi',
        penulis = '$penulis',
        penerbit = '$penerbit',
        gambar = '$namafile'
         
        WHERE idbuku = '$id'");

        if ($query) {
            header('location:Tabelbuku.php');
        } else {
            echo "gagal menyimpan data";
        }
    }

?>