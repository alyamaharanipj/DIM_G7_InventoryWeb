<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-6 mt-2">
                    <h2><?= $data['title'];?></h2>
                </div>
                <div class="col-6 text-end">
                    <a href="<?= BASEURL; ?>/supplier/create" class="btn btn-success mt-2">Tambah Supplier</a>
                </div>
            </div>
                <ul class="list-group">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">Nama Supplier</th>
                                <th scope="col" class="text-center">Email</th>
                                <th scope="col" class="text-center">No. HP</th>
                                <th scope="col" class="text-center">Alamat</th>
                                <th scope="col" class="text-center" width="200px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['supplier'] as $supplier) :?>
                                <tr>
                                    <td> <?= $supplier['nama_supplier'];?> </td>
                                    <td> <?= $supplier['email'];?> </td>
                                    <td> <?= $supplier['no_hp'];?> </td>
                                    <td> <?= $supplier['alamat'];?> </td>
                                    <td>
                                        <div class="text-center">
                                            <a href="<?= BASEURL; ?>/supplier/edit/<?= $supplier['id_supplier'] ?>" class="btn btn-outline-success">Edit</a>
                                            <a href="<?= BASEURL; ?>/supplier/delete/<?= $supplier['id_supplier'] ?>" class="btn btn-outline-danger">Hapus</a>
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