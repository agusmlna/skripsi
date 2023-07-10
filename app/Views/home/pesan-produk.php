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
                                        <button class="btn-pesan btn btn-dark w-100">
                                            <a class="text-pesan text-white text-decoration-none">Pesan</a>
                                            <div class="text-id d-none"><?= $m['id']; ?></div>
                                            <div class="text-menu d-none"><?= $m['menu']; ?></div>
                                            <div class="text-price d-none"><?= $m['harga']; ?></div>
                                            <div class="text-sampul d-none"><?= $m['sampul']; ?></div>
                                            <div class="recipe d-none"><?= $m['recipe']; ?></div>
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>

        <div class="col-sm-4 rounded" style="background-color: #FFFFFF;">
            <form action="/home/pesan-produk/save" method="post" enctype="multipart/form-data">
                <div class="container pb-3">
                    <div class="row">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="text" name="CustomerName" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama">
                        </div>
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="text-danger mb-3" role="alert">
                                <?= session()->getFlashdata('pesan'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="pesanan">

                        </div>
                        <input type="hidden" name="menuOrder" class="menu-order" value="">
                        <div class="row">
                            <div class="col">
                                <h3 class="text-dark">Total</h3>
                            </div>
                            <div class="col">
                                <p class="text-dark total">Rp. 0</p>
                            </div>
                            <input type="hidden" name="total" class="input-total" value="">

                        </div>
                    </div>

                    <hr>

                    <h4 class="text-dark">Metode Pembayaran</h4>

                    <div class="row justify-content-center pt-3">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" value="bca" name="type-payment" id="btnradio1" autocomplete="off" data-bs-toggle="modal" data-bs-target="#exampleModal" checked>
                            <label class="btn btn-outline-primary" for="btnradio1"><img class="fit-image" src="/img/bca.png" width="105px" height="55px"></label>

                            <input type="radio" class="btn-check" value="cash" name="type-payment" id="btnradio3" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btnradio3"><img class="fit-image" src="/img/kasir.png" width="105px" height="55px"></label>
                        </div>
                    </div>

                    <div class="row pt-5 mt-1">
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="submit">Bayar</button>
                        </div>
                    </div>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 text-dark" id="buktibayar" name="buktibayar">Upload Bukti Pembayaran</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-dark">
                                    <h3>BCA / NO REK : 1043394746</h3>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="bukti-pembayaran" name="bukti-pembayaran">
                                        <label class="input-group-text" for="bukti-pembayaran">Upload</label>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="d-none stok-bahan">
    <?= json_encode($stokBahan); ?>
</div>


<?= $this->endSection(); ?>