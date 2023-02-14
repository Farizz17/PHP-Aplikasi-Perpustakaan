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

         <form action="ProsesTambahsiswa.php" method="POST">
        <table>

        <tr>
            <td>
                
            </td>
        </tr>

            <tr>
                <td>
                <label>NIS</label>
                </td>

                <td>
                <label>:</label>
                </td>

                <td>
                <input type="text" name="nis">
                </td>
            </tr>

            <tr>
                <td>
                <label>Nama</label>
                </td>

                <td>
                <label>:</label>
                </td>

                <td>
                <input type="text" name="nama">
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
                <!-- <input type="text" name="kelas"> -->
                <select name="kelas" id="">
                    <option value="X">X</option>
                    <option value="XI">XI</option>
                    <option value="XII">XII</option>
                </select>
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
                <!-- <input type="text" name="kelas"> -->
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
                    <input type="submit" name="tambahsiswa" id="">
                </td>
            </tr>  
        </table>
    </form>
    </body>
</html>