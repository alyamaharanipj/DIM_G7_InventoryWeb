<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-6">
                    <h2><?= $data['title'];?></h2>
                </div>
                <div class="col-6 text-end mb-2">
                    <a href="<?= BASEURL; ?>/pengguna/create" class="btn btn-success mt-2">Tambah Pengguna</a>
                </div>
            </div>
                <ul class="list-group">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr class="align-middle">
                                <th scope="col" class="text-center">Nama Pengguna</th>
                                <th scope="col" class="text-center">Nama Depan</th>
                                <th scope="col" class="text-center">Nama Belakang</th>
                                <th scope="col" class="text-center">No. HP</th>
                                <th scope="col" class="text-center">Alamat</th>
                                <th scope="col" class="text-center">Hak Akses</th>
                                <th scope="col" class="text-center" width="200px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['pengguna'] as $pengguna) :?>
                                <tr>
                                    <td> <?= $pengguna['nama_pengguna'];?> </td>
                                    <td> <?= $pengguna['nama_depan'];?> </td>
                                    <td> <?= $pengguna['nama_belakang'];?> </td>
                                    <td> <?= $pengguna['no_hp'];?> </td>
                                    <td> <?= $pengguna['alamat'];?> </td>
                                    <td> <?= $pengguna['nama_akses'];?> </td>
                                    <td>
                                        <div class="text-center">
                                            <a href="<?= BASEURL; ?>/pengguna/edit/<?= $pengguna['id_pengguna'] ?>" class="btn btn-outline-success">Edit</a>
                                            <a href="<?= BASEURL; ?>/pengguna/delete/<?= $pengguna['id_pengguna'] ?>" class="btn btn-outline-danger">Hapus</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>    
                </ul>
        </div>
    </div>
</div>