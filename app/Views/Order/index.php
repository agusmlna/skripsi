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
                        <th scope="col">Bukti Pembayaran</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Aksi</th>
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
                            <td><img src="/img/<?= $o['buktibayar']; ?>" alt="" class="buktibayar" style="width: 120px;"></td>
                            <td><?= $o['order_date']; ?></td>
                            <td>
                                <a href="" class="btn btn-success">Selesai</a>
                                <a href="" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Detail</a>

                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content text-dark">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-4 fw-bold text-center" id="exampleModalLabel">CASH</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row justify-content-between">
                                                    <div class="col">
                                                        <p>
                                                            ID Pesanan
                                                        <p>
                                                        <p>
                                                            Total
                                                        <p>
                                                    </div>
                                                    <div class="col text-end">
                                                        <p>
                                                            ID Pesanan
                                                        <p>
                                                        <p>
                                                            Total
                                                        <p>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row px-5">
                                                <div class="d-grid gap-2 col-6 mx-auto">
                                                    <button type="button" class="btn btn-outline-primary btn-lg" data-bs-toggle="button">100000</button>
                                                    <button type="button" class="btn btn-outline-primary btn-lg" data-bs-toggle="button">20000</button>
                                                </div>
                                                <div class="d-grid gap-2 col-6 mx-auto">
                                                    <button type="button" class="btn btn-outline-primary btn-lg" data-bs-toggle="button">30000</button>
                                                    <button type="button" class="btn btn-outline-primary btn-lg" data-bs-toggle="button">50000</button>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="col px-5">
                                                <p class="text-center">Masukan Uang</p>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text">Rp.</span>
                                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                </div>
                                                <div class="row justify-content-between pb-3">
                                                    <div class="col-4">
                                                        Kembalian
                                                    </div>
                                                    <div class="col-4 text-end">
                                                        40000
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>