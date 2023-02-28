<?php

// CLASS
class perpustakaan
{

    // PROPERTY
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "perpustakaan2";
    private $koneksi;

    // METHOD
    public function __construct()
    {
        $this->koneksi = mysqli_connect(
        $this->host,
        $this->username,
        $this->password,
        $this->database);
    }  

    public function proseslogin($username, $password)
    {
        $query = $this->koneksi->query
        ("SELECT * FROM users 
        WHERE
        username = '$username' AND
        password = md5('$password')");
        $data = $query->fetch_object();
        $count = $query->num_rows;

        if($count > 0){
            session_start();
            $_SESSION['login'] = 1;
            $_SESSION['username'] = $data->username;
            $_SESSION['level'] = $data->level;
            $_SESSION['nis'] = $data->nis;
            header('location:../dashboard.php');
        } else {
            session_start();
            $_SESSION['fail'] = 'Anda Gagal Login';
            header ('location:../login.php');
        }
    }

    public function logout(){
        session_start();
        session_destroy();

        // ALERT
        session_start();
        $_SESSION['success'] ='Anda Berhasil Logout!';
        // unset($_SESSION['success']);

        header('location:../login.php');
    }

    // DATA USERS
    public function listusers(){
        $query = $this->koneksi->query
        ("SELECT * FROM users");
        while ($data = $query->fetch_object()){
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function prosestambah($username, $password){
        $query = $this->koneksi->query
        ("INSERT INTO users VALUES (null,'$username',md5('$password'),'Petugas','0')");
        if($query){
            session_start();
            $_SESSION['success'] = "Data Berhasil Disimpan!";
            // $_SESSION['fail'] = "Data Gagal Disimpan!";
            header("location:../dashboard.php?pages=users");
        }
    }

    // public function prosestambah($username, $password){
    //     $query = $this->koneksi->query
    //     ("INSERT INTO users VALUES (null,'$username',md5('$password'),'Petugas','0')");
    //     if($query){
    //         session_start();
    //         $_SESSION['success'] = "Data Berhasil Disimpan!";
    //         // $_SESSION['fail'] = "Data Gagal Disimpan!";
    //         header("location:../dashboard.php?pages=users");
    //     }
    // }

    // public function hapususers(){
    //     $query = $this->koneksi->query("DELETE * FROM users WHERE");
    //     while ($data = $query->fetch_object()){
    //         $hasil[] = $data;
    //     }
    //     return $hasil;
    // }
}

$perpus = new perpustakaan();
// print_r($perpus->$list_users());
// echo "<br>";
// echo $perpus->$listusers();