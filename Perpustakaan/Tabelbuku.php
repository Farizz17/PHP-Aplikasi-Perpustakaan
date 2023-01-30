<html>
    <head>
        <title>Tabel Buku</title>
    </head>
    <body>
        <table border="" width="800">
            <tr>
                <th>No</th>
                <th>Judul Buku</th>
                <!-- <th>Gambar</th> -->
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Cover</th>
            </tr>

            <?php
            require_once("Koneksi.php");
            $query = mysqli_query($koneksi,"SELECT * FROM buku");
            $no = 1;

            while ($data = mysqli_fetch_object($query)){
                echo "
                <tr>
                <td>$no</td>
                <td>{$data->judul}</td>
                <td>{$data->penulis}</td>
                <td>{$data->penerbit}</td>
                <td>$no</td>
                </tr>";

                $no++;
                }
            ?>
        </table>
    </body>
</html>