<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="my-1 pt-3"> Daftar Data Pesanan</h1>
            <ul class="nav nav-pills">
                <li class="nav-item me-4">
                    <a class="nav-link " aria-current="page" href="#">Laporan Penjualan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Laporan Pembayaran</a>
                </li>
            </ul>
            <a href="<?php echo site_url('pdf/generate') ?>">
                Download PDF
            </a>
            <table class="table table-dark table-borderless">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pemesan</th>
                        <th scope="col">Nama Menu</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Harga / Produk</th>
                        <th scope="col">Harga Total</th>
                        <th scope="col">Tipe</th>
                        <th scope="col">Bukti</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Status</th>
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
                            <td><?= date('d/m/Y', strtotime($o['order_date'])) ?></td>
                            <!-- Status            -->
                            <?php if ($o['status'] == 'Sukses') : ?>
                                <td><span class="badge text-bg-success"><?= $o['status']; ?></td>
                            <?php elseif ($o['status'] == 'Di Proses') : ?>
                                <td><span class="badge text-bg-primary"><?= $o['status']; ?></td>
                            <?php else : ?>
                                <td><span class="badge text-bg-danger"><?= $o['status']; ?></td>
                            <?php endif; ?>
                            <td>
                                <a href="/admin/order/sukses/<?= $o['id']; ?>" class="btn btn-success"><i class="fa-solid fa-check"></i></a>
                                <?php if ($o['type_payment'] == 'cash') : ?>
                                    <a href="" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="returnDataToModal(<?= $o['id']; ?>, <?= $o['total']; ?>)"><i class="fa-solid fa-money-bill"></i></a>
                                <?php endif; ?>
                                <a href="/admin/order/detail/<?= $o['id']; ?>" class="btn btn-primary"><i class="fa-solid fa-circle-info"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- modal -->
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
                        <p class="id-order">
                            ID Pesanan
                        <p>
                        <p class="total-order">
                            Total
                        <p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row px-5 btn-group" role="group" aria-label="Basic radio toggle button group">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <input type="checkbox" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" value="100000" checked>
                    <label class="btn btn-outline-primary" for="btnradio1">100.000</label>
                    <input type="checkbox" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" value="20000">
                    <label class="btn btn-outline-primary" for="btnradio2">20.000</label>
                    <!-- <button type="button" class="btn btn-outline-primary btn-lg" data-bs-toggle="button">100000</button>
                    <button type="button" class="btn btn-outline-primary btn-lg" data-bs-toggle="button">20000</button> -->
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <input type="checkbox" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off" value="30000">
                    <label class="btn btn-outline-primary" for="btnradio3">30.000</label>
                    <input type="checkbox" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off" value="50000">
                    <label class="btn btn-outline-primary" for="btnradio4">50.000</label>
                    <!-- <button type="button" class="btn btn-outline-primary btn-lg" data-bs-toggle="button">30000</button>
                    <button type="button" class="btn btn-outline-primary btn-lg" data-bs-toggle="button">50000</button> -->
                </div>
            </div>
            <hr>
            <div class="col px-5">
                <p class="text-center">Masukan Uang</p>
                <div class="input-group mb-3">
                    <span class="input-group-text">Rp.</span>
                    <input type="number" class="form-control form-pay" aria-label="Amount (to the nearest dollar)">
                </div>
                <div class="row justify-content-between pb-3">
                    <div class="col-4">
                        Kembalian
                    </div>
                    <div class="col-4 text-end change">
                        0
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
<?= $this->endSection(); ?>