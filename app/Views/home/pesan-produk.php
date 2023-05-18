<?= $this->extend('home/template/base'); ?>

<?= $this->section('usercontent'); ?>


<div class="container pt-5 mt-5">
    <div class="row">
        <div class="col-sm-8">
            <div class="container">
                <div class="row">
                    <?php foreach ($menu as $m) : ?>
                        <div class="col py-2">
                            <a href="#" class="text-decoration-none text-black">
                                <div class="card" style="width: 15rem;">
                                    <img src="/img/<?= $m['sampul']; ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $m['menu']; ?></h5>
                                        <p class="card-text fs-5 fw-bold cai-color-text mb-1 text-price">Rp. <?= number_format($m['harga'], 0, '.', '.'); ?> </p>
                                        <!-- <a href="<?= base_url('home/pesan-produk/buy/' . $m['id']) ?>" class="btn btn-dark w-100">Pesan</a> -->
                                        <div class="btn-pesan">
                                            <a href="#" class="btn btn-dark w-100 ">Pesan</a>
                                            <div class="text-id d-none"><?= $m['id']; ?></div>
                                            <div class="text-menu d-none"><?= $m['menu']; ?></div>
                                            <div class="text-price d-none"><?= $m['harga']; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>


        <div class="col-sm-4 rounded" style="background-color: #FFFFFF;">
            <div class="container">
                <div class="row">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama">
                    </div>
                    <div class="mb-3 pesanan">
                        <!-- <div class="row">
                            <div class="col">
                                <h3 class="text-dark name"></h3>
                            </div>
                            <div class="col">
                                <p class="text-dark price">rp.</p>
                            </div>
                        </div> -->
                    </div>
                    <div class="row">
                        <div class="col">
                            <h3 class="text-dark">Total</h3>
                        </div>
                        <div class="col">
                            <p class="text-dark total">Rp. 0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>