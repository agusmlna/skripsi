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
                    <h2 class="text-dark pt-2">Menu</h2>
                    <p class="text-white">
                        2 Menu
                    </p>
                </div>
            </div>
        </div>
        <div class="col border rounded-3 bg-warning mx-2">
            <div class="d-flex pt-5 ps-3">
                <div>
                    <i class="fa-solid fa-whiskey-glass fa-2xl" style="color: #000000;"></i>
                    <h2 class="text-dark pt-2">Menu</h2>
                    <p class="text-white">
                        2 Menu
                    </p>
                </div>
            </div>
        </div>
        <div class="col border rounded-3 bg-danger mx-2">
            <div class="d-flex pt-5 ps-3">
                <div>
                    <i class="fa-solid fa-whiskey-glass fa-2xl" style="color: #000000;"></i>
                    <h2 class="text-dark pt-2">Menu</h2>
                    <p class="text-white">
                        2 Menu
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>