<h3 class="text-center">FORMULIR PENDAFTARAN CALON NASABAH</h3>
<h3 class="text-center mt-3">BANK SAMPAH ENVIRO'18</h3>

<P class="text-center mt-5">Silahkan untuk mengisi formulir dibawah ini</P>

<div class="row mt-4 justify-content-center">
    <div class="col-sm-8">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="name" name="name">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <label for="rt">RT</label>
                    <input type="text" class="form-control" id="rt">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat">
                </div>
                <div class="form-group">
                    <label for="no_hp">No Hp / WA</label>
                    <input type="text" class="form-control" id="no_hp">
                </div>
                <div class="form-group mt-5">
                    <button type="submit" class="btn btn-dark float-right">Daftar</button>
                </div>
            </div>
        </div>
    </div>
</div>
