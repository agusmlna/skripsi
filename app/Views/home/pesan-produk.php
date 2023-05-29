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
            <div class="container pb-3">
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

                <hr>

                <div class="row justify-content-center pt-3">
                    <div class="col">
                        <h3 class="text-dark text-center">Payment Method</h3>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col ps-5 ms-5">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                BCA
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h1 class="py-4 text-dark">NO REK : 1043394746</h1>
                                            <div class="mb-5 text-dark">
                                                <label for="formFile" class="form-label">Masukan Bukti Pembayaran</label>
                                                <input class="form-control" type="file" id="formFile">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col ps-2">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Cash
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Bayar Di Tempat Alamat : Jalan Warakas 4 Gang 3 No 52 </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row pt-5 mt-1">
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="button">Bayar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>