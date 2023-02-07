<?php
require_once("Koneksi.php");
if (isset($_POST['tambah'])) {

    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];

    $namafile = $_FILES['gambar']['name'];
    $ukuran = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];

    if (
        $judul == '' || $deskripsi == '' || $penulis == '' || $penerbit == '' || $namafile == '')
    {
        header("location:Tambah.php");
        // echo "gagagallll";
    } 
    
    else {

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

        $query = mysqli_query($koneksi, "INSERT INTO BUKU VALUES
        (null,'$judul','$deskripsi','$penulis','$penerbit', '$namafile')");

        if ($query) {
            header('location:Tabelbuku.php');
        } else {
            echo "gagal menyimpan data";
        }
    }
}

?>