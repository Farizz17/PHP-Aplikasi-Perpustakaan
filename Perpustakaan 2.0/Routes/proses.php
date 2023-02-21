<?php
include '../Controllers/db.php';

if ($_POST['login']){
    $username = $_POST['username'];
        $password = $_POST['password'];

    if($username == '' || $password == ''){
        session_start();
        $_SESSION['fail'] = 'Username atau Password Salah!';
        header('location:../login.php');
    } else {
         $perpus->proseslogin($username, $password);
    }
}

if ($_GET['aksi'] == 'logout'){
    $perpus->logout();
}

// if ($_GET['aksi'] == 'ilegal'){
//     $perpus->ilegal();
// }