<?php
require_once("Koneksi.php");
if (isset($_POST['ubahsiswa'])) {

    $id = $_POST['id'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
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

        $query = mysqli_query($koneksi, "UPDATE siswa SET
        nis = '$nis',nama = '$nama', kelas = '$kelas', jurusan = '$jurusan'
         
        WHERE id = '$id'");

        if ($query) {
            header('location:Datasiswa.php');
        } else {
            echo "gagal menyimpan data";
        }
    }

?>