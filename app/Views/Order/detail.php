<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
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
                    </div>
                </div>

                <div class="row pt-4 justify-content-center">
                    <h5 class="col-4 fw-bold">Nama </h5>
                    <div class="col-4 text-end">
                        <h5 class="fw-bold">Agus Maulana</h5>
                    </div>
                </div>
                <div class="container pt-2">
                    <div class="row justify-content-center">
                        <p class="col-3">Matcha</p>
                        <p class="col-2">x 2</p>
                        <div class="col-3 text-end">
                            <p>Rp. 30000</p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <p class="col-3">Motasuren</p>
                        <p class="col-2">x 1</p>
                        <div class="col-3 text-end">
                            <p>Rp. 15000</p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <p class="col-3">Blueocean</p>
                        <p class="col-2">x 1</p>
                        <div class="col-3 text-end">
                            <p>Rp. 15000</p>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-1">
                        <hr class="border border-dark border-2 opacity-100" style="width: 68%;">
                    </div>
                    <div class="row pt-2 justify-content-center">
                        <p class="col-4">Cash</p>
                        <div class="col-4 text-end">
                            <p>Rp. 100000</p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <p class="col-4">Kembalian</p>
                        <div class="col-4 text-end">
                            <p>Rp. 40000</p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <h5 class="col-4 fw-bold">Total Payment</h5>
                        <div class="col-4 text-end">
                            <h5 class="fw-bold">Rp. 60000</h5>
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
            <div class="d-grid gap-2 col-6 mx-auto pt-3">
                <button class="btn btn-success" type="button">Print</button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>