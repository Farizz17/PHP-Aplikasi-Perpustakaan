<?php
require_once("Koneksi.php");
session_start();
?>

<html>
    <body>
        <center>

        <h1>DATA PEMINJAMAN BUKU <?= $_SESSION['nama'] ?></h1>

        <table border="5">
            <tr>
                <th>No</th>
                <th>Judul Buku</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>

            <?php
            $id = $_SESSION['nis'];
            $no = 1;

            $querypinjam = mysqli_query
            ($koneksi, "SELECT * FROM pinjam
            INNER JOIN buku ON buku.idbuku = pinjam.idbuku
            WHERE nis = $id");

            while($datapinjam = mysqli_fetch_object($querypinjam)){
            ?>

            <tr>
                <td><?= $no++ ?></td>
                <td><?= $datapinjam->judul ?></td>
                <td><?= $datapinjam->tanggalpinjam ?></td>
                <td><?= $datapinjam->tanggalkembali ?></td>
            </tr>

            <?php
            }?>

            </table>
                <br>
                    <div class="pilihan">
                    <a style="text-decoration: none; background-color: blue; color: white; padding: 10px; border-radius: 20px;" href="Perpustakaan.php">Kembali Ke Halaman Depan</a>
                    </div>
                </tr>

             <h4>
            Nama : <?= $_SESSION['nama'] ?> <br>
            Level : <?= $_SESSION['level'] ?> <br>
            NIS : <?= $_SESSION['nis'] ?> </h4>
        </center>
    </body>
</html>