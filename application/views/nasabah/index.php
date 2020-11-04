<h2 class="text-center">DATA NASABAH</h2>

<div class="row m-t-30">
    <div class="col-md-12">
        <a href="<?= base_url('admin/create_nasabah'); ?>" class="au-btn btn-dark m-b-20"><i class="fas fa-plus"></i> Tambah</a>
        <a href="" class="au-btn btn-danger m-b-20"><i class="far fa-file-pdf"></i> Cetak</a>
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>RT</th>
                        <th>Alamat</th>
                        <th>No Hp / WA</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $no = 1;
                    foreach ($penjualan as $data) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $users['name'] ?></td>
                            <td><?= $users['rt_users'] ?></td>
                            <td><?= $users['alamat_users'] ?></td>
                            <td><?= $users['telepon_users'] ?></td>
                            <td><?= $data['total_penjualan'] ?></td>
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