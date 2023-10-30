<?= $this->extend('home/template/base'); ?>

<?= $this->section('usercontent'); ?>
<div class="container pt-5 mt-5">
    <div class="row justify-content-center">
        <h1 class="text-center">Promo</h1>
        <div class="col">
            <div class="cardbg-transparent" style="width: 25rem;">
                <img src="/img/paketpromo.png" class="card-img-top rounded" alt="...">
                <div class="card-body">
                    <h5 class="card-text py-3 fw-bold">Promo Bulan ini</h5>
                    <p class="text-muted">Berlaku Hingga 30 Juli</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="cardbg-transparent" style="width: 25rem;">
                <img src="/img/promokemerdekaan.png" class="card-img-top rounded" alt="...">
                <div class="card-body">
                    <h5 class="card-text py-3 fw-bold">Promo Kemerdekaan Beli 2 Red Velvet Gratis Kentang Goreng!!</h5>
                    <p class="text-muted">Berlaku Hingga 17 Juli s/d 17 Agustus</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-between">
        <h1 class="text-center mb-4">Tips</h1>
        <div class="col text-dark">
            <div class="card" style="width: 18rem;">
                <img src="/img/promo2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Kopi Susu Gula Aren</h5>
                    <p class="card-text">Tips membuat kopi dirumah dengan alat french press..</p>
                    <a href="https://hellosehat.com/nutrisi/resep-sehat/resep-kopi-gula-aren/" class="btn btn-primary" target="_blank">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col text-dark">
            <div class="card" style="width: 18rem;">
                <img src="/img/mocktail.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Resep Mocktail</h5>
                    <p class="card-text">Berbagai Jenis resep mocktail....</p>
                    <a href="https://cookpad.com/id/cari/minuman%20mocktail%20sprite" class="btn btn-primary" target="_blank">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END OF ADS 
<?= $this->endSection(); ?>