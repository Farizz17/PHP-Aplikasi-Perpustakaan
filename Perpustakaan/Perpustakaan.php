<?php
session_start();
if ($_SESSION['login'] == null){
    header('location:Login.php?err=ilegal');
} else {
?>

<html>
    <head>
        <title>Perpustakaan Mini</title>
    </head>
    <body style="background-color: grey;">
    <h2>Dashboard Perpustakaan Mini</h2>
    <hr>
       <!-- <marquee><h1>👉👈 Selamat Datang <?= $_SESSION['nama']; ?> di Perpustakaan Mini 👉👈</h1></marquee> -->
       <center><h2>Selamat Datang <u><i><?= $_SESSION['nama']; ?></i></u> di Perpustakaan Mini!!</h2></center>
        <br>

        <?php 
        if ($_SESSION['level'] == 'Petugas'){
        ?>

       <center>
            <div class="tabelpilihan">
                    <a style="text-decoration: none; background-color: red; color: white; padding: 10px; border-radius: 20px;" href="Tabelbuku.php">Tabel Buku</a>
            </div><br><br>

            <div class="pilihan">
                    <a style="text-decoration: none; background-color: blue; color: white; padding: 10px; border-radius: 20px;" href="Tabelusers.php">Tabel Pengguna</a>
            </div><br><br>

            <div class="pilihan">
                <a style="text-decoration: none; background-color: red; color: white; padding: 10px; border-radius: 20px;" href="Peminjaman.php">Peminjaman Buku</a>
            </div>   <br><br>

            <div class="pilihan">
                <a style="text-decoration: none; background-color: blue; color: white; padding: 10px; border-radius: 20px;" href="Datasiswa.php">Data Siswa</a>
            </div>

       <?php
        }
        if ($_SESSION['level'] == 'Siswa'){
       ?>
        <center>
            <div class="pilihan">
                <a style="text-decoration: none; background-color: blue; color: white; padding: 10px; border-radius: 20px;" href="DataPeminjamanBuku.php">Data Peminjaman Buku</a>
            </div>
       </center>
       <?php
        }
       ?>

        <center>
          <br><br><br>
            <div class="pilihan">
                <a style="text-decoration: none; background-color: red; color: white; padding: 10px; border-radius: 20px;" href="Logout.php">Log Out</a>
            </div>
       </center>

            <center> <h4>
            Nama : <?= $_SESSION['nama'] ?> <br>
            Level : <?= $_SESSION['level'] ?> <br>
            NIS : <?= $_SESSION['nis'] ?>
            </h4></center>

    </body>
</html>

<?php
}
?>