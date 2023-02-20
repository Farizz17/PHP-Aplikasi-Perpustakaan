<?php

require_once("Koneksi.php");

?>

<html>
    <head>
        <title>Tambah Pengguna</title>
    </head>
    <body style="background-color: burlywood; color: black;">

    <h1>Tambah Data Pengguna</h1>
    <hr>

         <form action="ProsesTambahuser.php" method="POST">
        <table>

        <tr>
            <td>
                
            </td>
        </tr>

            <tr>
                <td>
                <label>Username</label>
                </td>

                <td>
                <label>:</label>
                </td>

                <td>
                <input type="text" name="username">
                </td>
            </tr>

            <tr>
                <td>
                <label>Password</label>
                </td>

                <td>
                <label>:</label>
                </td>

                <td>
                <input type="password" name="password">
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
                <!-- <input type="text" name="level"> -->
                <select name="level" id="">
                    <option value="Petugas">Petugas</option>
                    <!-- <option value="Siswa">Siswa</option> -->
                    <!-- <option value="XII">XII</option> -->
                </select>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="submit" name="tambahusers" id="">
                </td>
            </tr>  
        </table>
    </form>
    </body>
</html>