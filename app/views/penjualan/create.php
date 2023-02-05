<div class="container mt-3">
    <div class="text-center">
        <h2>Tambah Penjualan</h2>
    </div>
    <form action="<?= BASEURL; ?>/penjualan/savePenjualan" method="POST" enctype="multipart/form-data">
        <div class="form-group row mt-2">
            <label for="id_pelanggan" class="col-sm-2 col-form-label">Pilih Pelanggan</label>
                <div class="col-sm-10">
                    <select name="id_pelanggan" class="form-select" id="id_pelanggan">
                        <option value="">Pilih Pelanggan</option>
                            <?php 
                                foreach($data['pelanggan'] as $pelanggan)
                                {
                                    echo '<option value="'.$pelanggan["id_pelanggan"].'">'.$pelanggan["nama_pelanggan"].'</option>';
                                }
                            ?>  
                    </select>
                </div>
        </div>
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
            <label for="jumlah_penjualan" class="col-sm-2 col-form-label">Jumlah Penjualan</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="jumlah_penjualan" placeholder="Jumlah Penjualan">
            </div>
        </div>  
        <div class="form-group row mt-2">
            <label for="harga_jual" class="col-sm-2 col-form-label">Harga Jual</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="harga_jual" placeholder="Harga Jual">
            </div>
        </div>  
        <div class="text-end">
            <input type="submit" value="Simpan" class="btn btn-success mt-2">
            <a href="<?= BASEURL; ?>/penjualan" class="btn btn-primary mt-2">Kembali</a>
        </div>
    </form>
</div>