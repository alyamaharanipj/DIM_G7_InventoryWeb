<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-6">
                    <h2><?= $data['title'];?></h2>
                </div>
                <div class="col-6 text-end mb-2">
                    <a href="<?= BASEURL; ?>/penjualan/create" class="btn btn-success mt-2">Tambah Penjualan</a>
                </div>
            </div>
                <ul class="list-group">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr class="align-middle">
                                <th scope="col" class="text-center">Barang</th>
                                <th scope="col" class="text-center">Jumlah Penjualan</th>
                                <th scope="col" class="text-center">Harga Jual</th>
                                <th scope="col" class="text-center">Created By</th>
                                <th scope="col" class="text-center">Pelanggan</th>
                                <th scope="col" class="text-center" width="200px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['penjualan'] as $penjualan) :?>
                                <tr>
                                    <td> <?= $penjualan['nama_barang'];?> </td>
                                    <td class="text-center"> <?= $penjualan['jumlah_penjualan'];?> </td>
                                    <td> <?= $penjualan['harga_jual'];?> </td>
                                    <td> <?= $penjualan['nama_pengguna'];?> </td>
                                    <td> <?= $penjualan['nama_pelanggan'];?> </td>
                                    <td>
                                        <div class="text-center">
                                            <a href="<?= BASEURL; ?>/penjualan/edit/<?= $penjualan['id_penjualan'] ?>" class="btn btn-outline-success">Edit</a>
                                            <a href="<?= BASEURL; ?>/penjualan/delete/<?= $penjualan['id_penjualan'] ?>" class="btn btn-outline-danger">Hapus</a>
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