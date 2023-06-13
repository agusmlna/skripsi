<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="my-1"> Daftar Data Pesanan</h1>
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
                        <th scope="col">Tipe Pembayaran</th>
                        <th scope="col">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($orders as $o) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $o['customer_name']; ?></td>
                            <td>
                                <?php foreach (json_decode($o['order_menu']) as $m) : ?>
                                    <?= $m->menu; ?>
                                    <br>
                                <?php endforeach; ?>
                            </td>
                            <td>
                                <?php foreach (json_decode($o['order_menu']) as $m) : ?>
                                    <?= $m->quantity; ?>
                                    <br>
                                <?php endforeach; ?>
                            </td>
                            <td>
                                <?php foreach (json_decode($o['order_menu']) as $m) : ?>
                                    <?= $m->price; ?>
                                    <br>
                                <?php endforeach; ?>
                            </td>
                            <td><?= $o['total']; ?></td>
                            <td><?= $o['type_payment']; ?></td>
                            <td><?= $o['order_date']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>