<div class="container mt-3">
    <div class="text-center">
        <h2>Tambah Pembelian</h2>
    </div>
    <form action="<?= BASEURL; ?>/pembelian/savePembelian" method="POST" enctype="multipart/form-data">
        <div class="form-group row mt-2">
            <label for="id_barang" class="col-sm-2 col-form-label">Pilih Barang</label>
                <div class="col-sm-10">
                    <select name="id_barang" class="form-select" id="id_barang">
                        <option value="">Pilih Barang</option>
                            <?php 
                                foreach($data['barang'] as $barang)
                                {
                                    echo '<option value="'.$barang["id_barang"].'">'.$barang["nama_barang"].'</option>';
                                }
                            ?>  
                    </select>
                </div>
        </div>
        <div class="form-group row mt-2">
            <label for="jumlah_pembelian" class="col-sm-2 col-form-label">Jumlah Pembelian</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="jumlah_pembelian" placeholder="Jumlah Pembelian">
            </div>
        </div>  
        <div class="form-group row mt-2">
            <label for="harga_beli" class="col-sm-2 col-form-label">Harga Beli</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="harga_beli" placeholder="Harga Beli">
            </div>
        </div>  
        <div class="form-group row mt-2">
            <label for="id_supplier" class="col-sm-2 col-form-label">Pilih Supplier</label>
                <div class="col-sm-10">
                    <select name="id_supplier" class="form-select" id="id_supplier">
                        <option value="">Pilih Supplier</option>
                            <?php 
                                foreach($data['supplier'] as $supplier)
                                {
                                    echo '<option value="'.$supplier["id_supplier"].'">'.$supplier["nama_supplier"].'</option>';
                                }
                            ?>  
                    </select>
                </div>
        </div>
        <div class="text-end">
            <input type="submit" value="Simpan" class="btn btn-success mt-2">
            <a href="<?= BASEURL; ?>/pengguna" class="btn btn-primary mt-2">Kembali</a>
        </div>
    </form>
</div>