<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-6">
                    <h2><?= $data['title'];?></h2>
                </div>
                <div class="col-6 text-end mb-2">
                    <a href="<?= BASEURL; ?>/pelanggan/create" class="btn btn-success mt-2">Tambah Pelanggan</a>
                </div>
            </div>
                <ul class="list-group">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">Nama Pelanggan</th>
                                <th scope="col" class="text-center">Email</th>
                                <th scope="col" class="text-center">No. HP</th>
                                <th scope="col" class="text-center">Jenis Kelamin</th>
                                <th scope="col" class="text-center">Tanggal Lahir</th>
                                <th scope="col" class="text-center">Alamat</th>
                                <th scope="col" class="text-center" width="200px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['pelanggan'] as $pelanggan) :?>
                                <tr>
                                    <td> <?= $pelanggan['nama_pelanggan'];?> </td>
                                    <td> <?= $pelanggan['email'];?> </td>
                                    <td> <?= $pelanggan['no_hp'];?> </td>
                                    <td> <?= $pelanggan['jenis_kelamin'];?> </td>
                                    <td> <?= $pelanggan['tgl_lahir'];?> </td>
                                    <td> <?= $pelanggan['alamat'];?> </td>
                                    <td>
                                        <div class="text-center">
                                            <a href="<?= BASEURL; ?>/pelanggan/edit/<?= $pelanggan['id_pelanggan'] ?>" class="btn btn-outline-success">Edit</a>
                                            <a href="<?= BASEURL; ?>/pelanggan/delete/<?= $pelanggan['id_pelanggan'] ?>" class="btn btn-outline-danger">Hapus</a>
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