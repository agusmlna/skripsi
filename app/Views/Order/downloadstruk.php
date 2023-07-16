<?= $this->extend('layout/templatestruk'); ?>

<?= $this->section('contentstruk'); ?>
<div class="container mb-3">
    <div class="row">
        <div class="col">
            <h2 class="py-3">Detail Pembayaran</h2>
            <div class="container py-5 border border-3 rounded-5">
                <div class="row">
                    <div class="col text-center">
                        <div>
                            <img class="rounded-circle me-3" src="/img/logomota.jpg" width="70" alt="">
                        </div>
                        <div>
                            <h5 class="fw-bold nopadding pt-2">Motamorph Coffee</h5>
                        </div>
                        <div>
                            <h5 class="fw-bold nopadding pt-2"><?= date('d/m/Y', strtotime($order['order_date'])) ?></h5>
                        </div>
                    </div>
                </div>

                <div class="row pt-4 justify-content-center">
                    <h5 class="col-4 fw-bold">Nama </h5>
                    <div class="col-4 text-end">
                        <h5 class="fw-bold"><?= $order['customer_name']; ?></h5>
                    </div>
                </div>
                <div class="container pt-2">
                    <?php foreach (json_decode($order['order_menu']) as $o) : ?>
                        <div class="row justify-content-center">
                            <p class="col-3"><?= $o->menu; ?></p>
                            <p class="col-2">x <?= $o->quantity; ?></p>
                            <div class="col-3 text-end">
                                <p>Rp. <?= $o->price ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="row justify-content-center mt-1">
                        <hr class="border border-dark border-2 opacity-100" style="width: 68%;">
                    </div>
                    <div class="row pt-2 justify-content-center">
                        <p class="col-4">Cash</p>
                        <div class="col-4 text-end">
                            <p>Rp.<?= $order['bayar']; ?></p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <p class="col-4">Kembalian</p>
                        <div class="col-4 text-end">
                            <p>Rp. <?= $order['kembalian']; ?></p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <h5 class="col-4 fw-bold">Total Payment</h5>
                        <div class="col-4 text-end">
                            <h5 class="fw-bold">Rp. <?= $order['total']; ?></h5>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-1">
                        <hr class="border border-dark border-2 opacity-100" style="width: 68%;">
                    </div>
                    <div class="row justify-content-center mt-1">
                        <h3 class="text-center">Terima Kasih!!</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>