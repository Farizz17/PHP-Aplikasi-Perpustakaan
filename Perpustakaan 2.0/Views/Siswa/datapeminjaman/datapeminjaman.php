<html>
    <body>
        <center>

        <h1>DATA PEMINJAMAN BUKU</h1>

        <table border="5">
            <tr>
                <th>No</th>
                <th>Judul Buku</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>

            <tr>
                <td><?= $no++ ?></td>
                <td><?= $datapinjam->judul ?></td>
                <td><?= $datapinjam->tanggalpinjam ?></td>
                <td><?= $datapinjam->tanggalkembali ?></td>
            </tr>

            </table>
                <br>
                    <div class="pilihan">
                    <a style="text-decoration: none; background-color: blue; color: white; padding: 10px; border-radius: 20px;" href="Perpustakaan.php">Kembali Ke Halaman Depan</a>
                    </div>
                </tr>
        </center>
    </body>
</html>