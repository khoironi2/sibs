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


<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Nilai Mata Pelajaran <?= $title; ?>
                <a class="badge badge-pill badge-success" style="color: white;" href="<?= base_url('mata_pelajaran/akhlak/export') ?>"><b>EXPORT</b></a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>RT</th>
                            <th>RT</th>
                            <th>RT</th>
                            <th>RT</th>
                            <th id="btn-action">Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>RT</th>
                            <th>RT</th>
                            <th>RT</th>
                            <th>RT</th>
                            <th id="btn-actionfot">Action</th>
                        </tr>
                    </tfoot>
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
        </div>
    </div>

</div>