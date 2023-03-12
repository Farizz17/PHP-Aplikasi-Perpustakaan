<?php

// while($users = $perpus->listusers()){

// }

?>

<a class="btn btn-success mb-3 shadow" href="dashboard.php?pages=users&act=tambah">Tambah Data Pengguna</a>

<table class='table border shadow'>

    <tr class="bg-primary text-light">
        <th>No</th>
        <th>ID Pengguna</th>
        <th>Nama</th>
        <th>Level</th>
        <th>Opsi</th>
    </tr>

    <?php
    $no = 1;
    foreach($perpus->listusers() as $u){

    
    ?>
    <tr>
        <td><?= $no; ?></td>
        <td><?= $u->user_id; ?></td>
        <td><?= $u->username; ?></td>
        <td><?= $u->level; ?></td>
        <td>
            <a class="btn btn-primary" href="dashboard.php?pages=users&act=ubah&id=<?= $u->user_id ?>">Ubah</a>
            <a class="btn btn-danger" href="Routes/proses.php?act=hapususers&id=<?= $u->user_id ?>" onclick="return confirm('yakin user ingin dihapus?')">Hapus</a>
        </td>
    </tr>

    <?php
    $no++;
    }
    ?>

</table>