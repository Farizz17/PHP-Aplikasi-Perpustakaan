<?php

require_once("Koneksi.php");
$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM buku WHERE idbuku = '$id'");

while($data = mysqli_fetch_object($query)) {

?>

<html>
    <head>
        <title>Ubah Buku</title>
    </head>
    <body style="background-color: burlywood; color: black;">

    <h1>Ubah Data Buku</h1>
    <hr>

         <form action="ProsesUbah.php" method="POST" enctype="multipart/form-data">
        <table>

            <tr>
                <input name='id' type='hidden' value="<?= $data->idbuku; ?>">

                <td>
                <label>Judul Buku</label>
                </td>

                <td>
                <label>:</label>
                </td>

                <td>
                <input type="text" name="judul" value="<?= $data->judul; ?>">
                </td>
            </tr>

            <tr>
                <td>
                <label>Deskripsi</label>
                </td>

                <td>
                <label>:</label>
                </td>

                <td>
                <textarea name="deskripsi" id="" cols="30" rows="10" value="<?= $data->deskripsi; ?>"></textarea>
                </td>
            </tr>

            <tr>
                <td>
                <label>Penulis</label>
                </td>

                <td>
                <label>:</label>
                </td>

                <td>
                <input type="text" name="penulis" value="<?= $data->penulis; ?>">
                </td>
            </tr>

            <tr>
                <td>
                <label>Penerbit</label>
                </td>

                <td>
                <label>:</label>
                </td>

                <td>
                <input type="text" name="penerbit" value="<?= $data->penerbit; ?>">
                </td>
            </tr>

            <tr>
                <td>
                <label>Gambar</label>
                </td>

                <td>
                <label>:</label>
                </td>

                <td>
                <input type="file" name="gambar"><br><br>
                <img width="190" src="images/<?= $data->gambar; ?>">
                </td>
            </tr>

            <tr>
                <td>
                    <center><input type="submit" name="ubah" id=""></center>
                </td>
            </tr>  
        </table>
    </form>
    </body>
</html>
<?php
}
?>