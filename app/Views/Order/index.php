<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="my-1"> Daftar Data Reservasi</h1>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pemesan</th>
                        <th scope="col">Nama Menu</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Harga / Produk</th>
                        <th scope="col">Harga Total</th>
                        <th scope="col">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Agus Maulana</td>
                        <td>Mota Suren , Matcha Milk</td>
                        <td>3 Item</td>
                        <td>Rp. 15000 , Rp 17000</td>
                        <td>Rp. 32000</td>
                        <td>11/06/2023</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>