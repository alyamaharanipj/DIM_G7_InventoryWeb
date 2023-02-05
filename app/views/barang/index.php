<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-6">
                    <h2><?= $data['title'];?></h2>
                </div>
                <div class="col-6 text-end mb-2">
                    <a href="<?= BASEURL; ?>/barang/create" class="btn btn-success mt-2">Tambah Barang</a>
                </div>
            </div>
                <ul class="list-group">
                    <table class="table table-bordered table-striped align-middle">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">Nama Barang</th>
                                <th scope="col" class="text-center">Keterangan</th>
                                <th scope="col" class="text-center">Satuan</th>
                                <th scope="col" class="text-center">Created By</th>
                                <th scope="col" class="text-center" width="200px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['barang'] as $barang) :?>
                                <tr>
                                    <td> <?= $barang['nama_barang'];?> </td>
                                    <td> <?= $barang['keterangan'];?> </td>
                                    <td> <?= $barang['satuan'];?> </td>
                                    <td> <?= $barang['nama_pengguna'];?> </td>
                                    <td>
                                        <div class="text-center">
                                            <a href="<?= BASEURL; ?>/barang/edit/<?= $barang['id_barang'] ?>" class="btn btn-outline-success">Edit</a>
                                            <a href="<?= BASEURL; ?>/barang/delete/<?= $barang['id_barang'] ?>" class="btn btn-outline-danger">Hapus</a>
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