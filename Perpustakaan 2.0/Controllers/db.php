<?php

// CLASS
class perpustakaan
{
    // PROPERTY
    // var $nama = 'fariz';
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
            $this->database
        );
    } 
}

// $perpus = new perpustakaan();
// echo $perpus->tes();

// ?>