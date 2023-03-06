<h5>Form Tambah Siswa</h5>
<hr style="height: 12px; background-color: black; border-radius: 10px;">

    <form action="Routes/proses.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
        <label for="">NISN :</label>
            <input class="form-control" type="text" name="nisn" placeholder="Masukkan NISN"><br>

                <label for="">Nama :</label>
                <input class="form-control" type="text" name="nama" placeholder="Masukkan Nama"><br>

                <label for="">Kelas :</label>
                <input class="form-control" type="text" name="kelas" placeholder="Masukkan Kelas"><br>

                <label for="">Foto :</label>
                <input class="form-control" type="file" name="foto" placeholder="Masukkan Foto"><br>

            <input class="btn btn-success form-control" type="submit" name="simpansiswa" id="">

        <a class="btn btn-danger" href="dashboard.php?pages=siswa">Kembali</a>
    </div>
    </form>