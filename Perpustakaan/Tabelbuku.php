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
            <a href="">TAMBAH</a>
        </div>
        </center>

       <!-- <button class="tambah">TAMBAH</button> -->
    
            <tr style="background-color: gray;">
                <th>No</th>
                <th>Judul Buku</th>
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
                echo
                "<tr>
                <th>$no</th>
                <td>{$data->judul}</td>
                <td>{$data->penulis}</td>
                <td>{$data->penerbit}</td>

                <td>
                <center><img src=images/{$data->gambar} width=100></center>
                </td>

                <td class='tombol'>
                <div class='ubah'>
                <a href=''>Ubah</a>
                </div>


                <div class='hapus'>
                <a href=''>Hapus</a>
                </div>
                </td>
                </tr>";

                $no++;
                }
            ?>
        </table>
    </body>
</html>