<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="my-1 pt-3"> Daftar Data Pesanan</h3>
            <div class="container py-3 my-3 border">
                <div class="row">
                    <div class="col">
                        <h4> Filter Data</h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <label for="tanggal" class="col-1 col-form-label">Date</label>
                            <div class="col-5 pb-3">
                                <div class="input-group date" id="datepicker">
                                    <input type="text" class="form-control" id="inputTanggal" name="tanggal" />
                                    <span class="input-group-append">
                                        <span class="input-group-text bg-light d-block">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <label for="tanggal" class="col-1 col-form-label">S/D</label>
                            <div class="col-5 pb-3">
                                <div class="input-group date" id="datepicker">
                                    <input type="text" class="form-control" id="inputTanggal" name="tanggal" />
                                    <span class="input-group-append">
                                        <span class="input-group-text bg-light d-block">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                            <button class="btn btn-primary me-md-1" type="button"><i class="fa-solid fa-filter" style="color: #ffffff;"></i>Filter</button>
                            <button type="reset" class="btn btn-outline-dark">Reset</button>
                        </div>
                    </div>
                </div>
            </div>

            <ul class="nav nav-pills pb-2">
                <li class="nav-item me-4">
                    <a class="nav-link active" aria-current="page" href="/admin/order/laporanpenjualan">Laporan Penjualan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/admin/order/laporanpembayaran">Laporan Pembayaran</a>
                </li>
            </ul>

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

                        <form action="/admin/order/save/<?= $o['id']; ?>" method="post">
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
                                                <input type="number" class="form-control form-pay" name="bayar" aria-label="Amount (to the nearest dollar)">
                                            </div>
                                            <div class="row justify-content-between pb-3">
                                                <div class="col-4">
                                                    Kembalian
                                                </div>
                                                <input type="hidden" class="form-control form-change" name="kembalian" aria-label="Amount (to the nearest dollar)">
                                                <span class="col-4 text-end change">
                                                    0
                                                </span>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- modal -->

<?= $this->endSection(); ?>