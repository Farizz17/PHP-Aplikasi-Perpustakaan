<?php
require_once("Koneksi.php");
?>

<html>
    <head>
        <title>FORM PEMINJAMAN BUKU</title>
    </head>
    <body>
        <h1>FORM PEMINJAMAN BUKU</h1>

        <form action="Prosespinjam.php" method="POST">
            <table style="background-color: burlywood; padding: 20px; border-radius: 20px;">

                    <!-- <tr>
                        <td>Tanggal Peminjaman</td>
                        <td>:</td>
                        <td>
                            <input type="date">
                        </td>
                    </tr> -->

                <tr>
                    <td>Siswa</td>
                    <td>:</td>
                    <td>
                        <select name="siswa" id="">
                            <?php
                            $querysiswa = mysqli_query($koneksi, "SELECT * FROM siswa");
                             while($datasiswa = mysqli_fetch_object($querysiswa)){
                            ?>
                                  <option value="<?= $datasiswa ->  id?>"><?= $datasiswa -> nama?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Buku</td>
                    <td>:</td>
                    <td>
                        <select name="siswa" id="">
                            <?php
                            $querybuku = mysqli_query($koneksi, "SELECT * FROM buku");
                             while($databuku = mysqli_fetch_object($querybuku)){
                            ?>
                                  <option value="<?= $databuku ->  idbuku?>"><?= $databuku -> judul?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Tanggal Pengembalian</td>
                    <td>:</td>
                    <td>
                        <input type="date" name="tanggalkembali">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" name="simpan" value="Simpan">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>