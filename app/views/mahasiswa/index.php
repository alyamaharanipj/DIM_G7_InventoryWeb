<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <h2>Data Mahasiswa</h2>
                <ul class="list-group">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col" width="300px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['mhs'] as $mhs) :?>
                                <tr>
                                    <td> <?= $mhs['nama'];?> </td>
                                    <td>
                                        <div class="text-center">
                                            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="btn btn-outline-info">Detail</a>
                                            <a href="<?= BASEURL; ?>/mahasiswa/edit/<?= $mhs['id'] ?>" class="btn btn-outline-success">Edit</a>
                                            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id'] ?>" class="btn btn-outline-danger">Hapus</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>    
                </ul>
            <a href="<?= BASEURL; ?>/mahasiswa/tambah" class="btn btn-success mt-2">Tambah Mahasiswa</a>
        </div>
    </div>
</div>