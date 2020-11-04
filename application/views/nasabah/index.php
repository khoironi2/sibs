<h2 class="text-center">DATA NASABAH</h2>

<div class="row m-t-30">
    <div class="col-md-12">
        <a href="" class="au-btn btn-danger m-b-20"><i class="far fa-file-pdf"></i> Cetak</a>
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tangal</th>
                        <th>Katalog</th>
                        <th>Harga</th>
                        <th>Berat</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $no = 1;
                    foreach ($penjualanku as $data) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data->name ?></td>
                            <td><?= $data->time_create_penjualan ?></td>
                            <td><?= $data->nama_katalog ?></td>
                            <td><?= $data->harga_penjualan ?></td>
                            <td><?= $data->berat_penjualan ?></td>
                            <td><?= $data->total_penjualan ?></td>
                        </tr>
                    <?php endforeach ?>

                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>
<div class="row m-t-30">
    <div class="col-sm-12">
        <?php $no = 1;
        foreach ($saldoku as $data) : ?>
            <p><b>Total Penjualan Sampah :</b> Rp. <?= $data->total; ?></p>
        <?php endforeach ?>
    </div>
</div>