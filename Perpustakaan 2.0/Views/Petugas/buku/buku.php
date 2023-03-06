<?php

// while($users = $perpus->listusers()){

// }

?>

<a class="btn btn-success mb-3 shadow" href="dashboard.php?pages=buku&act=tambahbuku">Tambah Data Buku</a>

<table class='table border shadow'>

    <tr class="bg-primary text-light">
        <th>No</th>
        <th>ID Buku</th>
        <th>Judul</th>
        <th>Deskripsi</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Cover</th>
        <th>Opsi</th>
    </tr>

    <?php
    $no = 1;
    foreach($perpus->listbuku() as $b){

    
    ?>
    <tr>
        <td><?= $no; ?></td>
        <td><?= $b->idbuku; ?></td>
        <td><?= $b->judul; ?></td>
        <td><?= $b->deskripsi; ?></td>
        <td><?= $b->penulis; ?></td>
        <td><?= $b->penerbit; ?></td>
        <td><img src=assets/img/<?= $b->gambar ?> width=100></td>
        <td>
            <a class="btn btn-primary" href="dashboard.php?pages=buku&act=ubahbuku&id=<?= $b->idbuku ?>">Ubah</a>
            <a class="btn btn-danger" href="Routes/proses.php?act=hapusbuku&id=<?= $b->idbuku ?>" onclick="return confirm('yakin user ingin dihapus?')">Hapus</a>
        </td>
    </tr>

    <?php
    $no++;
    }
    ?>

</table>