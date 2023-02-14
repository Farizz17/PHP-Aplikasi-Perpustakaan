<html>
    <head>
        <title>Tabel Buku</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

    <h1>DAFTAR LIST SISWA</h1>

       <table border="5">

    <center>
        <div class="tambah">
            <a href="Tambahsiswa.php">TAMBAH</a>
        </div>
    </center>

       <!-- <button class="tambah">TAMBAH</button> -->
    
            <tr style="background-color: gray;">
                <th>No</th>
                <!-- <th>ID Buku</th> -->
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>

            <?php
            require_once("Koneksi.php");
            $query = mysqli_query($koneksi,"SELECT * FROM siswa");
            $no = 1;

            while ($data = mysqli_fetch_object($query)){
                ?>
            
                <tr>
                <th><?= $no ?></th>
                <td><?= $data->nis ?></td>
                <td><?= $data->nama?></td>
                <td><?= $data->kelas ?></td>
                <td><?= $data->jurusan ?></td>

                <!-- <td>
                <center>X</center>
                </td> -->

                <td class='tombol'>
                <div class='ubah'>
                <a href="Ubahsiswa.php?id=<?= $data -> id ?>">UBAH</a>
                </div>

                <div class='hapus'>
                <a href="Hapussiswa.php?id=<?= $data->id ?>" onclick="return confirm('yakin siswa ingin dihapus?')">
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