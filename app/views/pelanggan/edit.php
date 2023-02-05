<div class="container mt-3">
    <div class="text-center">
        <h2>Edit Pelanggan</h2>
    </div>
    <form action="<?= BASEURL; ?>/pelanggan/updatePelanggan/<?= $data['pelanggan']['id_pelanggan']; ?>" method="POST" enctype="multipart/form-data">
        <div class="form-group row mt-2">
            <label for="nama_pelanggan" class="col-sm-2 col-form-label">Nama Pelanggan</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="nama_pelanggan" placeholder="Nama Pelanggan" value="<?= $data['pelanggan']['nama_pelanggan']; ?>">
            </div>
        </div>     
        <div class="form-group row mt-2">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="email" placeholder="Email" value="<?= $data['pelanggan']['email']; ?>">
            </div>
        </div>     
        <div class="form-group row mt-2">
            <label for="no_hp" class="col-sm-2 col-form-label">No. HP</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="no_hp" placeholder="No. HP" value="<?= $data['pelanggan']['no_hp']; ?>">
            </div>
        </div>     
        <div class="form-group row mt-2">
            <label for="jenis_kelamin" class="col-sm-2 col-form-label">Nama Pengguna</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="jenis_kelamin" placeholder="Jenis Kelamin" value="<?= $data['pelanggan']['jenis_kelamin']; ?>">
            </div>
        </div>     
        <div class="form-group row mt-2">
            <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="tgl_lahir" placeholder="Tanggal Lahir" value="<?= $data['pelanggan']['tgl_lahir']; ?>">
            </div>
        </div>     
        <div class="form-group row mt-2">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <textarea class="form-control" type="text" name="alamat" placeholder="Alamat"><?= $data['pelanggan']['alamat']; ?></textarea>
            </div>
        </div>     
        <div class="text-end">
            <input type="submit" value="Simpan" class="btn btn-success mt-2">
            <a href="<?= BASEURL; ?>/pelanggan" class="btn btn-primary mt-2">Kembali</a>
        </div>
    </form>
</div>