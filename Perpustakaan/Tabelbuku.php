<html>
    <head>
        <title>Tabel Buku</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

    <h1>DAFTAR LIST BUKU</h1>

       <table border="5">

    <center>
        <div class="tambah">
            <a href="Tambah.php">TAMBAH</a>
        </div>
    </center>

       <!-- <button class="tambah">TAMBAH</button> -->
    
            <tr style="background-color: gray;">
                <th>No</th>
                <!-- <th>ID Buku</th> -->
                <th>Judul Buku</th>
                <th>Deskripsi</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Cover</th>
                <th>Aksi</th>
            </tr>

            <?php
            require_once("Koneksi.php");
            $query = mysqli_query($koneksi,"SELECT * FROM buku");
            $no = 1;

            while ($data = mysqli_fetch_object($query)){
                ?>
            
                <tr>
                <th><?= $no ?></th>
                <td><?= $data->judul ?></td>
                <td><?= $data->deskripsi?></td>
                <td><?= $data->penulis ?></td>
                <td><?= $data->penerbit ?></td>
                <td><img src=images/<?= $data->gambar ?> width=100></td>

                <!-- <td>
                <center>X</center>
                </td> -->

                <td class='tombol'>
                <div class='ubah'>
                <a href="Ubah.php?id=<?= $data -> idbuku ?>">UBAH</a>
                </div>

                <div class='hapus'>
                <a href="Hapus.php?id=<?= $data->idbuku ?>" onclick="return confirm('yakin data ingin dihapus?')">
                HAPUS</a>
                </div>
                </td>
                </tr>
            <?php
                $no++;
            }
            ?>
        </table>

        <br>
        <a style="text-decoration: none; background-color: blue; color: white; padding: 10px; border-radius: 20px;" href="Perpustakaan.php">Kembali Ke Halaman Depan</a>
    </body>
</html>


<!-- <img src=images/{$data->gambar} width=100> -->