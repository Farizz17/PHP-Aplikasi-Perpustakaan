<?php

require_once("Koneksi.php");
$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id = '$id'");

while($data = mysqli_fetch_object($query)) {

?>

<html>
    <head>
        <title>Ubah Pengguna</title>
    </head>
    <body style="background-color: burlywood; color: black;">

    <h1>Ubah Data Pengguna</h1>
    <hr>

         <form action="ProsesUbahsiswa.php" method="POST">
        <table>

            <tr>
                <input name='id' type='hidden' value="<?= $data->id; ?>">

                <td>
                <label>NIS</label>
                </td>

                <td>
                <label>:</label>
                </td>

                <td>
                <input type="text" name="nis" value="<?= $data->nis; ?>">
                </td>
            </tr>

            <tr>
                <input name='id' type='hidden' value="<?= $data->id; ?>">

                <td>
                <label>Nama</label>
                </td>

                <td>
                <label>:</label>
                </td>

                <td>
                <input type="text" name="nama" value="<?= $data->nama; ?>">
                </td>
            </tr>

            <tr>
                <td>
                <label>Kelas</label>
                </td>

                <td>
                <label>:</label>
                </td>

                <td>
                <!-- <input type="text" name="kelas" value="<?= $data->kelas; ?>"> -->
                <select name="kelas" id="">
                    <option value="X">X</option>
                    <option value="XI">XI</option>
                    <option value="XII">XII</option>
                </select>
                </td>
            </tr>

            <tr>
                <td>
                <label>Jurusan</label>
                </td>

                <td>
                <label>:</label>
                </td>

                <td>
                <!-- <input type="text" name="kelas" value="<?= $data->kelas; ?>"> -->
                <select name="jurusan" id="">
                    <option value="TJKT">TJKT</option>
                    <option value="PPLG">PPLG</option>
                    <option value="PH">PH</option>
                    <option value="SM">SM</option>
                    <option value="TKR">TKR</option>
                    <option value="AP">AP</option>
                    <option value="AKL">AKL</option>
                    <option value="EI">EI</option>
                    <option value="TITL">TITL</option>
                </select>
                </td>
            </tr>

            <tr>
                <td>
                    <center><input type="submit" name="ubahsiswa" id=""></center>
                </td>
            </tr>  
        </table>
    </form>
    </body>
</html>
<?php
}
?>