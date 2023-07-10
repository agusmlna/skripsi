<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col border rounded-3 bg-info mx-2">
            <div class="d-flex pt-5 ps-3">
                <div>
                    <i class="fa-solid fa-whiskey-glass fa-2xl" style="color: #000000;"></i>
                    <h2 class="text-dark pt-2">Menu</h2>
                    <p class="text-white">
                        <?= count($menu); ?> Menu
                    </p>
                </div>
            </div>
        </div>
        <div class="col border rounded-3 bg-success mx-2">
            <div class="d-flex pt-5 ps-3">
                <div>
                    <i class="fa-solid fa-whiskey-glass fa-2xl" style="color: #000000;"></i>
                    <h2 class="text-dark pt-2">Pesanan</h2>
                    <p class="text-white">
                        <?= count(($orders)); ?> Pesanan
                    </p>
                </div>
            </div>
        </div>
        <div class="col border rounded-3 bg-warning mx-2">
            <div class="d-flex pt-5 ps-3">
                <div>
                    <i class="fa-solid fa-whiskey-glass fa-2xl" style="color: #000000;"></i>
                    <h2 class="text-dark pt-2">Reservasi</h2>
                    <p class="text-white">
                        <?= count($reservasi); ?> Reservasi
                    </p>
                </div>
            </div>
        </div>
        <div class="col border rounded-3 bg-danger mx-2">
            <div class="d-flex pt-5 ps-3">
                <div>
                    <i class="fa-solid fa-whiskey-glass fa-2xl" style="color: #000000;"></i>
                    <h2 class="text-dark pt-2">Stok Bahan</h2>
                    <p class="text-white">
                        <?= count($stokBahan); ?> Bahan Baku
                    </p>
                </div>
            </div>
        </div>

    </div>
    <div class="row justify-content-center pt-4">
        <div class="col-sm-3 border rounded-3 bg-danger mx-2">
            <div class="d-flex pt-5 ps-3">
                <div>
                    <i class="fa-solid fa-whiskey-glass fa-2xl" style="color: #000000;"></i>
                    <h2 class="text-dark pt-2">Akun Pelanggan</h2>
                    <p class="text-white">
                        <?= count($User); ?> Akun Pelanggan
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>