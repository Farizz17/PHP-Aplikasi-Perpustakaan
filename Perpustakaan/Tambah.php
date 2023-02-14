<?php

require_once("Koneksi.php");

?>

<html>
    <head>
        <title>Tambah Buku</title>
    </head>
    <body style="background-color: burlywood; color: black;">

    <h1>Tambah Data Buku</h1>
    <hr>

         <form action="ProsesTambah.php" method="POST" enctype="multipart/form-data">
        <table>

        <tr>
            <td>
                
            </td>
        </tr>

            <tr>
                <td>
                <label>Judul Buku</label>
                </td>

                <td>
                <label>:</label>
                </td>

                <td>
                <input type="text" name="judul">
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
                <textarea name="deskripsi" id="" cols="30" rows="10"></textarea>
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
                <input type="text" name="penulis">
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
                <input type="text" name="penerbit">
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
                <input type="file" name="gambar">
                </td>
            </tr>

            <tr>
                <td>
                    <input type="submit" name="tambah" id="">
                </td>
            </tr>  
        </table>
    </form>
    </body>
</html>