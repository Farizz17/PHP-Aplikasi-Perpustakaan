<?php
include '../Controllers/db.php';

// PROSES LOGIN DAN LOGOUT
if (@$_POST['login']){
    $username = $_POST['username'];
        $password = $_POST['password'];

    if($username == '' || $password == ''){
        session_start();
        $_SESSION['fail'] = 'Anda Gagal Login!';
        header('location:../login.php');
    } else {
         $perpus->proseslogin($username, $password);
    }
}

if (@$_GET['aksi'] == 'logout'){
    $perpus->logout();
}
// PROSES LOGIN DAN LOGOUT

// PROSES TAMBAH USERS
if(@$_POST['simpanusers']){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $perpus->prosestambahusers($username, $password);
}
// PROSES TAMBAH USERS

// PROSES UBAH USERS
if(@$_POST['ubahusers']){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $perpus->ubahusers($id, $username, $password);
}
// PROSES UBAH USERS

// PROSES HAPUS USERS
if(@$_GET['act'] == 'hapususers'){
    $id = $_GET['id'];
   $perpus->hapususers($id);
}
// PROSES HAPUS USERS


// PROSES TAMBAH SISWA
if(@$_POST['simpansiswa']){
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

    $foto = $_FILES['foto']['name'];

    $perpus->prosestambahsiswa($nisn, $nama, $kelas, $foto);
}
// PROSES TAMBAH SISWA

// PROSES UBAH SISWA
if(@$_POST['ubahsiswa']){
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $foto = $_FILES['foto']['name'];
    $id = $_POST['id'];

    $perpus->ubahsiswa($nisn, $nama, $kelas, $foto, $id);
}
// PROSES UBAH SISWA

// PROSES HAPUS SISWA
if(@$_GET['act'] == 'hapussiswa'){
    $id = $_GET['id'];
    $perpus->hapussiswa($id);
}
// PROSES HAPUS SISWA












// PROSES TAMBAH SISWA
if(@$_POST['simpanbuku']){
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];

    $cover = $_FILES['cover']['name'];

    $perpus->prosestambahbuku($judul, $deskripsi, $penulis, $penerbit, $cover);
}
// PROSES TAMBAH SISWA

// PROSES UBAH SISWA
if(@$_POST['ubahbuku']){
     $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];

    $id = $_POST['id'];

    $cover = $_FILES['cover']['name'];

    $perpus->ubahbuku($judul, $deskripsi, $penulis, $penerbit, $cover, $id);
}
// PROSES UBAH SISWA

// PROSES HAPUS SISWA
if(@$_GET['act'] == 'hapusbuku'){
    $id = $_GET['id'];
    $perpus->hapusbuku($id);
}
// PROSES HAPUS SISWA