<div class="container mt-3">
    <div class="text-center">
        <h2>Edit Hak Akses</h2>
    </div>
    <form action="<?= BASEURL; ?>/hakakses/updateHakAkses/<?= $data['hakakses']['id_akses']; ?>" method="POST" enctype="multipart/form-data">
        <div class="form-group row mt-2">
            <label for="nama_pengguna" class="col-sm-2 col-form-label">Nama Hak Akses</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="nama_akses" placeholder="Nama Hak Akses" value="<?= $data['hakakses']['nama_akses']; ?>">
            </div>
        </div>   
        <div class="form-group row mt-2">
            <label for="nama_akses" class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-10">
                <textarea class="form-control" type="text" name="keterangan" placeholder="Keterangan"><?= $data['hakakses']['keterangan']; ?></textarea>
            </div>
        </div>   
        <div class="text-end">
            <input type="submit" value="Simpan" class="btn btn-success mt-2">
            <a href="<?= BASEURL; ?>/pengguna" class="btn btn-primary mt-2">Kembali</a>
        </div>    
    </form>
</div>