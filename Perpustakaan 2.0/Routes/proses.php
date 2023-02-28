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

    // echo $username, $password;
    $perpus->prosestambah($username, $password);
}
// PROSES TAMBAH USERS
