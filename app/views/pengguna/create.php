<div class="container mt-3">
    <div class="text-center">
        <h2>Tambah Pengguna</h2>
    </div>
    <form action="<?= BASEURL; ?>/pengguna/savePengguna" method="POST" enctype="multipart/form-data">   
        <div class="form-group row">
            <label for="nama_pengguna" class="col-sm-2 col-form-label">Nama Pengguna</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="nama_pengguna" placeholder="Nama Pengguna">
            </div>
        </div>     
        <div class="form-group row mt-2">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="password" placeholder="Password">
            </div>
        </div>     
        <div class="form-group row mt-2">
            <label for="nama_depan" class="col-sm-2 col-form-label">Nama Depan</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="nama_depan" placeholder="Nama Depan">
            </div>
        </div>    
        <div class="form-group row mt-2">
            <label for="nama_belakang" class="col-sm-2 col-form-label">Nama Belakang</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="nama_belakang" placeholder="Nama Belakang">
            </div>
        </div>  
        <div class="form-group row mt-2">
            <label for="no_hp" class="col-sm-2 col-form-label">No. HP</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="no_hp" placeholder="No. HP">
            </div>
        </div>  
        <div class="form-group row mt-2">
            <label for="no_hp" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <textarea class="form-control" type="text" name="alamat" placeholder="Alamat"></textarea>
            </div>
        </div>  
        <div class="form-group row mt-2">
            <label for="id_akses" class="col-sm-2 col-form-label">Pilih Hak Akses</label>
                <div class="col-sm-10">
                    <select name="id_akses" class="form-select" id="id_akses">
                        <option value="">Pilih Role</option>
                            <?php 
                                foreach($data['hak_akses'] as $hak_akses)
                                {
                                    echo '<option value="'.$hak_akses["id_akses"].'">'.$hak_akses["nama_akses"].'</option>';
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