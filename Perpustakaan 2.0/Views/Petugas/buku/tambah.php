<h5>Form Tambah Buku</h5>
<hr style="height: 12px; background-color: black; border-radius: 10px;">

    <form action="Routes/proses.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
        <label for="">Judul Buku :</label>
            <input class="form-control" type="text" name="judul" placeholder="Masukkan Judul"><br>

                <label for="">Deskripsi :</label>
                <input class="form-control" type="text" name="deskripsi" placeholder="Masukkan Deskripsi"><br>

                <label for="">Penulis :</label>
                <input class="form-control" type="text" name="penulis" placeholder="Masukkan Penulis"><br>

                <label for="">Penerbit :</label>
                <input class="form-control" type="text" name="penerbit" placeholder="Masukkan Penerbit"><br>

                <label for="">Cover :</label>
                <input class="form-control" type="file" name="cover" placeholder="Masukkan Cover"><br>

            <input class="btn btn-success form-control" type="submit" name="simpanbuku" id="">

        <a class="btn btn-danger" href="dashboard.php?pages=buku">Kembali</a>
    </div>
    </form>