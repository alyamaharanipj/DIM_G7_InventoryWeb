<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-6">
                    <h2>Data Hak Akses</h2>
                </div>
                <div class="col-6 text-end mb-2">
                    <a href="<?= BASEURL; ?>/hakakses/create" class="btn btn-success mt-2">Tambah Hak Akses</a>
                </div>
            </div>
                <ul class="list-group">
                    <table class="table table-bordered table-striped align-middle">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">Nama Hak Akses</th>
                                <th scope="col" class="text-center">Keterangan</th>
                                <th scope="col" class="text-center" width="300px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['hakakses'] as $hakakses) :?>
                                <tr>
                                    <td> <?= $hakakses['nama_akses'];?> </td>
                                    <td> <?= $hakakses['keterangan'];?> </td>
                                    <td>
                                        <div class="text-center">
                                            <a href="<?= BASEURL; ?>/hakakses/edit/<?= $hakakses['id_akses'] ?>" class="btn btn-outline-success">Edit</a>
                                            <a href="<?= BASEURL; ?>/hakakses/delete/<?= $hakakses['id_akses'] ?>" class="btn btn-outline-danger">Hapus</a>
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