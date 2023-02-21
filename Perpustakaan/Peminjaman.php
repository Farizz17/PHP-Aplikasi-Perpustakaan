<?php
require_once("Koneksi.php");
@$nis = $_GET['nis'];
error_reporting(0);
?>

<html>
    <head>
        <title>FORM PEMINJAMAN BUKU</title>
    </head>
    <body>
        <h1>FORM PEMINJAMAN BUKU</h1>

        <form action="Prosespinjam.php" method="POST">
            <table style="background-color: burlywood; padding: 20px; border-radius: 20px;">

                <tr>
                    <form action="Prosescari.php" method="POST">
                        <td>NIS</td>
                    <td>:</td>
                    <td>
                    <input type="text" name="nis" autofocus>
                    <input type="submit" name="cari" value="Cari">
                    </td>
                    </form>
                </tr>

                <tr>
                    <form action="Prosespinjam.php" method="POST">

                        <td>Siswa</td>
                        <td>:</td>
                        <td>
                        
                        <?php
                        $querysiswa = mysqli_query
                        ($koneksi , "SELECT * FROM siswa WHERE nis = '$nis' ");
                        $nama = mysqli_fetch_array($querysiswa);
                        ?>

                        <input type="hidden" name="id" value="<?=$nama['nis']?>"  >
                        <input type="text" name="siswa" value="<?=$nama['nama']?>">

                    </td>
                </tr>
            </form>

                <tr>
                    <td>Buku</td>
                    <td>:</td>
                    <td>
                        <select name="buku" id="">
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

        <table border="5px">
            <tr>
            <th>No</th>
            <th>Nomor Peminjaman</th>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Judul Buku</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Pengembalian</th>
            <!-- <td>No</td> -->
            </tr>

        <?php
        // $nis = $_POST['nis'];
        $no = 1;

        $querypinjam = mysqli_query
        ($koneksi, "SELECT * FROM pinjam
        inner join buku on buku.idbuku = pinjam.idbuku
        inner join siswa on siswa.nis = pinjam.nis");

        while($datapinjam = mysqli_fetch_object($querypinjam)){
        ?>

        <tr>
            <td><?= $no++ ?></td>
            <td><?= $datapinjam->nomorpeminjaman ?></td>
            <td><?= $datapinjam->nis ?></td>
            <td><?= $datapinjam->nama ?></td>
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

        <!-- <a href="Perpustakaan.php">BACK</a> -->

    </body>
</html>