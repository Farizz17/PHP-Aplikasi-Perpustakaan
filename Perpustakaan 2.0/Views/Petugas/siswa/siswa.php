<?php

// while($users = $perpus->listusers()){

// }

?>

<a class="btn btn-success mb-3 shadow" href="dashboard.php?pages=siswa&act=tambahsiswa">Tambah Data Siswa</a>

<table class='table border shadow'>

    <tr class="bg-primary text-light">
        <th>No</th>
        <th>NISN</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Foto</th>
        <th>Opsi</th>
    </tr>

    <?php
    $no = 1;
    foreach($perpus->listsiswa() as $s){

    
    ?>
    <tr>
        <td><?= $no; ?></td>
        <td><?= $s->nisn; ?></td>
        <td><?= $s->nama; ?></td>
        <td><?= $s->kelas; ?></td>
        <td><img src=assets/img/<?= $s->foto ?> width=100></td>
        <td>
            <a class="btn btn-primary" href="dashboard.php?pages=siswa&act=ubahsiswa&id=<?= $s->siswa_id ?>">Ubah</a>
            <a class="btn btn-danger" href="Routes/proses.php?act=hapussiswa&id=<?= $s->siswa_id ?>" onclick="return confirm('yakin user ingin dihapus?')">Hapus</a>
        </td>
    </tr>

    <?php
    $no++;
    }
    ?>

</table>