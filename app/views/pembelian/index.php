<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-6">
                    <h2><?= $data['title'];?></h2>
                </div>
                <div class="col-6 text-end mb-2">
                    <a href="<?= BASEURL; ?>/pembelian/create" class="btn btn-success mt-2">Tambah Pembelian</a>
                </div>
            </div>
                <ul class="list-group">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr class="align-middle">
                                <th scope="col" class="text-center">Barang</th>
                                <th scope="col" class="text-center">Jumlah Pembelian</th>
                                <th scope="col" class="text-center">Harga Beli</th>
                                <th scope="col" class="text-center">Created By</th>
                                <th scope="col" class="text-center">Supplier</th>
                                <th scope="col" class="text-center" width="200px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['pembelian'] as $pembelian) :?>
                                <tr>
                                    <td> <?= $pembelian['nama_barang'];?> </td>
                                    <td class="text-center"> <?= $pembelian['jumlah_pembelian'];?> </td>
                                    <td> <?= $pembelian['harga_beli'];?> </td>
                                    <td> <?= $pembelian['nama_pengguna'];?> </td>
                                    <td> <?= $pembelian['nama_supplier'];?> </td>
                                    <td>
                                        <div class="text-center">
                                            <a href="<?= BASEURL; ?>/pembelian/edit/<?= $pembelian['id_pembelian'] ?>" class="btn btn-outline-success">Edit</a>
                                            <a href="<?= BASEURL; ?>/pembelian/delete/<?= $pembelian['id_pembelian'] ?>" class="btn btn-outline-danger">Hapus</a>
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