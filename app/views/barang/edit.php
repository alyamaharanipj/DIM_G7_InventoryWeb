<div class="container mt-3"><div class="container mt-3">
    
    <div class="text-center">
        <h2>Edit Barang</h2>
    </div>
    <form action="<?= BASEURL; ?>/barang/updateBarang/<?= $data['barang']['id_barang']; ?>" method="POST" enctype="multipart/form-data">
    <div class="form-group row mt-2">
            <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="nama_barang" placeholder="Nama Barang" value="<?= $data['barang']['nama_barang']; ?>">
            </div>
        </div>   
        <div class="form-group row mt-2">
            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-10">
                <textarea class="form-control" type="text" name="keterangan" placeholder="Keterangan"><?= $data['barang']['keterangan']; ?></textarea>
            </div>
        </div>   
        <div class="form-group row mt-2">
            <label for="satuan" class="col-sm-2 col-form-label">Satuan</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="satuan" placeholder="Satuan" value="<?= $data['barang']['satuan']; ?>">
            </div>
        </div>   
        <div class="text-end">
            <input type="submit" value="Simpan" class="btn btn-success mt-2">
            <a href="<?= BASEURL; ?>/barang" class="btn btn-primary mt-2">Kembali</a>
        </div>    
    </form>
</div>