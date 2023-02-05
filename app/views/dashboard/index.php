<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-6">
                    <h2><?= $data['title'];?></h2>
                </div>
            </div>
                <ul class="list-group">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr class="align-middle">
                                <th scope="col" class="text-center">Nama Barang</th>
                                <th scope="col" class="text-center">Total Pembelian</th>
                                <th scope="col" class="text-center">Total Penjualan</th>
                                <th scope="col" class="text-center">Pendapatan Barang Terjual</th>
                                <th scope="col" class="text-center">Modal Beli</th>
                                <th scope="col" class="text-center">Keuntungan Barang Terjual</th>
                                <th scope="col" class="text-center">Total Untung/Rugi Keseluruhan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['dashboard'] as $dashboard) :?>
                                <tr>
                                    <td> <?= $dashboard['nama_barang'];?> </td>
                                    <td> <?= $dashboard['total_pembelian'];?> </td>
                                    <td> <?= $dashboard['total_penjualan'];?> </td>
                                    <td> Rp <?= number_format($dashboard['pendapatan_barang_terjual'], 2, ',', '.');?> </td>
                                    <td> Rp <?= number_format($dashboard['modal_beli'], 2, ',', '.');?> </td>
                                    <td> Rp <?= number_format($dashboard['keuntungan_barang_terjual'], 2, ',', '.');?></td>
                                    <td> Rp <?= number_format($dashboard['profit_or_loss'], 2, ',', '.');?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>    
                </ul>
        </div>
    </div>
</div>