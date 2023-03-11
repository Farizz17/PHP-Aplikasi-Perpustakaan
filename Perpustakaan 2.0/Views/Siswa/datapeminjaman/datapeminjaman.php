<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'perpustakaan2');
@session_start();
?>

<table class="table border shadow">
    <tr class="bg-primary text-white">
        <th>No</th>
        <th>ID Buku</th>
        <th>Judul Buku</th>
        <th>Tanggal Peminjaman</th>
        <th>Tanggal Kembali</th>
    </tr>
    <?php
    $nisn = $_SESSION['nis'];
    $no = 1;
    $querydp = mysqli_query($koneksi, "SELECT * FROM pinjam
    INNER JOIN buku ON buku.idbuku = pinjam.idbuku WHERE nisn=$nisn");
    while ($dp = mysqli_fetch_array($querydp)) {
    ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $dp['idbuku']; ?></td>
            <td><?= $dp['judul']; ?></td>
            <td><?= $dp['tanggalpinjam']; ?></td>
            <td><?= $dp['tanggalkembali']; ?></td>
        </tr>
    <?php
    }
    ?>
</table>