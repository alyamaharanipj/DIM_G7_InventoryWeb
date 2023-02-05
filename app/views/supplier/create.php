<div class="container mt-3">
    <div class="text-center">
        <h2>Tambah Supplier</h2>
    </div>
    <form action="<?= BASEURL; ?>/supplier/saveSupplier" method="POST" enctype="multipart/form-data">
        <div class="form-group row mt-2">
            <label for="nama_supplier" class="col-sm-2 col-form-label">Nama Supplier</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="nama_supplier" placeholder="Nama Supplier">
            </div>
        </div>  
        <div class="form-group row mt-2">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="email" placeholder="Email">
            </div>
        </div> 
        <div class="form-group row mt-2">
            <label for="no_hp" class="col-sm-2 col-form-label">No. HP</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="no_hp" placeholder="No. HP">
            </div>
        </div>  
        <div class="form-group row mt-2">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <textarea class="form-control" type="text" name="alamat" placeholder="Alamat"></textarea>
            </div>
        </div>   
        <div class="text-end">
            <input type="submit" value="Simpan" class="btn btn-success mt-2">
            <a href="<?= BASEURL; ?>/supplier" class="btn btn-primary mt-2">Kembali</a>
        </div>
    </form>
</div>