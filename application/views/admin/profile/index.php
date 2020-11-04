<h1 class="text-center">Profile <?= $users["name"]; ?></h1>

<div class="row mt-4">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">

                <form action="<?= base_url('admin/profile'); ?>" method="POST">
        
                    <div class="form-group">
                        <label for="time_create_penjualan">Tanggal</label>
                        <input type="datetime-local" class="form-control" id="time_create_penjualan" name="time_create_penjualan" required>
                        <?= form_error('time_create_penjualan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group mt-5">
                        <button type="submit" class="btn btn-dark">Simpan</button>
                    </div>

                </form>
                
            </div>
        </div>
    </div>
</div>
