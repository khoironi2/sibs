<h2 class="text-center">DATA NASABAH</h2>

<div class="row m-t-30">
    <div class="col-md-12">
        <div class="row">
            <form action="<?= base_url('admin/laporan_penjualan_pdf'); ?>" method="POST" class="form-inline">
                <div class="form-group mb-2">
                    <label for="dari">Dari </label>
                    <input type="datetime-local" class="form-control ml-2" id="dari" name="keyword1">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label for="sampai">Sampai </label>
                    <input type="datetime-local" class="form-control ml-2" id="sampai" name="keyword2">
                </div>
                <button type="submit" class="au-btn btn-danger m-b-20"><i class="far fa-file-pdf"></i> cetak</button>
            </form>

        </div>
        <a href="<?= base_url('admin/create_nasabah'); ?>" class="au-btn btn-dark m-b-20"><i class="fas fa-plus"></i> Tambah</a>
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
                        <th>Saldo</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $no = 1;
                    foreach ($nasabah as $data) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data->name ?></td>
                            <td><?= $data->rt_users ?></td>
                            <td><?= $data->alamat_users ?></td>
                            <td><?= $data->telepon_users ?></td>
                            <td><?= $data->total ?></td>
                            <td>
                                <a href="<?= base_url('admin/update_nasabah'); ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach ?>

                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>