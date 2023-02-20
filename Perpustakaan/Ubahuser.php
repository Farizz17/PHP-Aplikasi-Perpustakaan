<?php

require_once("Koneksi.php");
$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM users WHERE id = '$id'");

while($data = mysqli_fetch_object($query)) {

?>

<html>
    <head>
        <title>Ubah Pengguna</title>
    </head>
    <body style="background-color: burlywood; color: black;">

    <h1>Ubah Data Pengguna</h1>
    <hr>

         <form action="ProsesUbahuser.php" method="POST" enctype="multipart/form-data">
        <table>

            <tr>
                <input name='id' type='hidden' value="<?= $data->id; ?>">

                <td>
                <label>Username</label>
                </td>

                <td>
                <label>:</label>
                </td>

                <td>
                <input type="text" name="username" value="<?= $data->username; ?>">
                </td>
            </tr>

            <tr>
                <input name='id' type='hidden' value="<?= $data->id; ?>">

                <td>
                <label>Password</label>
                </td>

                <td>
                <label>:</label>
                </td>

                <td>
                <input type="password" name="password" value="<?= $data->password; ?>">
                </td>
            </tr>

            <tr>
                <td>
                <label>Level</label>
                </td>

                <td>
                <label>:</label>
                </td>

                <td>
                <!-- <input type="text" name="level" value="<?= $data->level; ?>"> -->
                <select name="level" id="">
                    <option value="Petugas">Petugas</option>
                    <!-- <option value="Siswa">Siswa</option> -->
                </td>
            </tr>

            <tr>
                <td>
                    <center><input type="submit" name="ubahuser" id=""></center>
                </td>
            </tr>  
        </table>
    </form>
    </body>
</html>
<?php
}
?>