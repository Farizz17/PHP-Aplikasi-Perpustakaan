<a href="dashboard.php?pages=peminjaman&act=tambah" class="btn btn-success mb-3">Tambah Data Peminjaman</a>

<table class="table border shadow">
    <tr class="bg-primary text-white">
        <th>No</th>
        <th>Nomor Peminjaman</th>
        <th>NISN</th>
        <th>Nama Siswa</th>
        <th>Judul Buku</th>
        <th>Tanggal Peminjaman</th>
        <th>Tanggal Kembali</th>
        <th>Opsi</th>
    </tr>
    <?php
    $no = 1;
    foreach (@$perpus->listpeminjaman() as $pinjam){?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $pinjam->nomorpeminjaman; ?></td>
            <td><?= $pinjam->nisn; ?></td>
            <td><?= $pinjam->nama; ?></td>
            <td><?= $pinjam->judul; ?></td>
            <td><?= $pinjam->tanggalpinjam; ?></td>
            <td><?= $pinjam->tanggalkembali; ?></td>
            <td>
            <a class="btn btn-danger" href="Routes/proses.php?act=hapuspeminjaman&nisn=<?= $pinjam->nisn; ?>" onclick="return confirm('yakin user ingin dihapus?')">Hapus</a>
            </td>
        </tr>
    <?php
        $no++;
    }
    ?>
</table>