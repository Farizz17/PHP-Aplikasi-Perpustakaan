<html>
    <head>
        <title>Login Perpustakaan</title>
    </head>
    <center>
        <body>
        <h3>Login Akun Perpustakaan</h3>
        <hr>
        
        <?php
        // if (isset($_POST['login'])){
        $pesan = $_GET['err'];

        if ($pesan == 'logout'){
            echo "<center><h3 style='background-color: red; color: white; padding: 10px; width: 300px; border-radius: 30px;'>ANDA TELAH LOGOUT</h3></center>";
        }

        if ($pesan == 'gagallogin'){
            echo "<center><h3 style='background-color: purple; color: white; padding: 10px; width: 300px; border-radius: 30px;'>ANDA GAGAL LOGIN</h3></center>";
        }

        if ($pesan == 'ilegal') {
            echo "<center><h3 style='background-color: purple; color: white; padding: 10px; width: 300px; border-radius: 30px;'>MAU NYUSUP KAH MANIEZ</h3></center>";
        }
        // }
        ?>

        <form action="ProsesLogin.php" method="POST">
            <table style="background-color: burlywood; border-radius: 10px;">

                <!-- <tr>
                    <td><input type="text" name="id" hidden></td>
                </tr> -->

                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="username"></td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="password"></td>
                </tr>

                <!-- <tr>
                    <td>Level</td>
                    <td>:</td>
                    <td><select name="level">
                        <option value="petugas">Petugas</option>
                        <option value="siswa">Siswa</option>
                    </select></td>
                </tr> -->

                <tr>
                    <td>
                        <input type="submit" name="login" id="">
                    </td>
                </tr>
            </table>
        </form>
    </body>
    </center>
</html>