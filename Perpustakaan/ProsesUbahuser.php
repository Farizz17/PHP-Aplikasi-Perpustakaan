<?php
require_once("Koneksi.php");
if (isset($_POST['ubahuser'])) {

    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];
    // $penulis = $_POST['penulis'];
    // $penerbit = $_POST['penerbit'];

    // $namafile = $_FILES['gambar']['name'];
    // $ukuran = $_FILES['gambar']['size'];
    // $error = $_FILES['gambar']['error'];

        // if ($ukuran > 0 || $error == 0) {

        //     $move = move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/' . $namafile);

        //     if ($move) {
        //         echo "<br> File '$namafile' dengan ukuran $ukuran sudah ter-upload";
        //     } else {
        //         echo "terjadi kesalahan sewaktu mengupload file";
        //     }
        // } else {
        //     echo "file gagal diupload karena : " . $error;
        // }

        $query = mysqli_query($koneksi, "UPDATE users SET
        username = '$username',password = '$password', level = '$level'
         
        WHERE id = '$id'");

        if ($query) {
            header('location:Tabelusers.php');
        } else {
            echo "gagal menyimpan data";
        }
    }

?>