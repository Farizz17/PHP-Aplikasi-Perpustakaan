<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

    
    <table>
        <form action="Prosescari.php" method="post">
        <tr>
                <td>cari</td>
                <td>:</td>
                <td>
                    <input type="text" name="nis">
                    <input type="submit" value="cari">
                </td>
            </form>
        </tr>
        <tr>
    <form action="Prosespinjam.php" method="POST">
        <td>Siswa</td>
        <td>:</td>
        <td>

            <input type="hidden" name="id" value="<?=$data_siswa['nis']?>">
            <input type="text" name="siswa" value="<?=$data_siswa['nama']?>" disabled>
      
        </td>
    </tr>
    <tr>
        <td>Buku</td>
        <td>:</td>
        <td>
        <select name="buku">
        <option value=""></option>
        </select>
        </td>
    </tr>

    <tr>    
        <td>tanggal kembali</td>
        <td>:</td>
        <td><input type="date" name="tanggalkembali"></td>
    </tr>

    <tr>
      <td>
      <input type="submit" name="simpan" value="simpan">
      </td>  
    </tr>
    
</table>
</form>

<table border="1" cellspacing="0" cellpadding="5">
<tr>
    <td>No</td>
    <td>No_peminjaman</td>
    <td>id_buku</td>
    <td>judul_buku</td>
    <td>nama siswa</td>
    <td>tgl_pinjam</td>
    <td>tgl_kembali</td>
</tr>
<tr>
    <td><?=$no?></td>
    <td><?=$data_peminjaman->nomorpeminjaman?></td>
    <td><?=$data_peminjaman->nis?></td>
    <td><?=$data_peminjaman->judul?></td>
    <td><?=$data_peminjaman->nama?></td>
    <td><?=$data_peminjaman->tanggalpinjam?></td>
    <td><?=$data_peminjaman->tanggalkembali?></td>
</tr>
</table>
</body>
</html>