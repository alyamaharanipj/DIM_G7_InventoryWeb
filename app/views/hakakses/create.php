<div class="container mt-3">
    <div class="text-center">
        <h2>Tambah Hak Akses</h2>
    </div>
    <form action="<?= BASEURL; ?>/hakakses/saveHakAkses" method="POST" enctype="multipart/form-data">
        <div class="form-group row mt-2">
            <label for="nama_akses" class="col-sm-2 col-form-label">Nama Hak Akses</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="nama_akses" placeholder="Nama Hak Akses">
            </div>
        </div>   
        <div class="form-group row mt-2">
            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-10">
                <textarea class="form-control" type="text" name="keterangan" placeholder="Keterangan"></textarea>
            </div>
        </div>   
        <div class="text-end">
            <input type="submit" value="Simpan" class="btn btn-success mt-2">
            <a href="<?= BASEURL; ?>/hakakses" class="btn btn-primary mt-2">Kembali</a>
        </div>
    </form>
</div>