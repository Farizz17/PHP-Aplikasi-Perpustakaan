<html>
    <head>
        <title>Login Perpustakaan</title>
    </head>
    <body>
        <h3>Login Akun Perpustakaan</h3>
        <hr>
        
        <?php
        // if (isset($_POST['login'])){
        $pesan = $_GET['err'];

        if ($pesan == 'logout'){
            echo "ANDA TELAH LOGOUT";
        }

        if ($pesan == 'gagallogin'){
            echo "ANDA GAGAL LOGIN!";
        }

        if ($pesan == 'ilegal') {
            echo "ANDA MAU NYUSUP YA, LOGIN DULU BG";
        }
        // }
        ?>

        <form action="ProsesLogin.php" method="POST">
            <table style="background-color: burlywood; border-radius: 10px;">
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
</html>