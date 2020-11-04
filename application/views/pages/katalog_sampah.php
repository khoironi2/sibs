<div class="row m-t-30">
    <div class="col-md-12">
        <h2 class="text-center">KATALOG SAMPAH</h2>
        <div class="row m-t-30">
            <div class="card-deck">
                <?php foreach ($katalog as $kat) : ?>
                    <div class="card">
                        <img style="height: 150px;" src="<?= base_url('./assets/images/katalog/' . $kat["gambar_katalog"]); ?>" class="img-thumbnail" height="10" alt="Katalog">
                        <div class="card-body">
                            <h5 class="card-title"><?= $kat["nama_katalog"]; ?></h5>
                            <p class="card-text"><?= $kat["keterangan_katalog"] ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?= $kat["nama_jenis_sampah"]; ?></li>
                            <li class="list-group-item">Harga Per <?= $kat["satuan_katalog"] ?> <?= $kat["harga_katalog"] ?></li>
                        </ul>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- DATA TABLE-->
        <!-- END DATA TABLE-->
    </div>
</div>