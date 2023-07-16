<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pt-3">
                    <li class="breadcrumb-item"><a href="/admin/order">Pesanan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Laporan Penjualan</li>
                </ol>
            </nav>
            <h1 class="my-1 pb-3">Laporan Penjualan</h1>
            <form action="/admin/order/laporanpenjualan" method="post">
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
                                <label for="tanggal-1" class="col-1 col-form-label">Date</label>
                                <div class="col-5 pb-3">
                                    <div class="input-group date" id="datepicker-1">
                                        <input type="text" class="form-control" id="inputTanggal-1" name="tanggal-1" />
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
                                <label for="tanggal-2" class="col-1 col-form-label">S/D</label>
                                <div class="col-5 pb-3">
                                    <div class="input-group date" id="datepicker-2">
                                        <input type="text" class="form-control" id="inputTanggal-2" name="tanggal-2" />
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
                                <button class="btn btn-primary me-md-1" type="submit"><i class="fa-solid fa-filter" style="color: #ffffff;"></i>Filter</button>
                                <button type="reset" class="btn btn-outline-dark">Reset</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <form action="/pdf/generate/" method="get">
                <?php
                $arrId = array();
                for ($i = 0; $i < count($orders); $i++) {
                    array_push($arrId, $orders[$i]['id']);
                }
                ?>
                <input type="hidden" name="arrId" value=<?= json_encode($arrId); ?>>
                <button type="submit">
                    Download PDF
                </button>
            </form>
            <table class="table table-dark table-borderless">
                <thead class="table-dark">
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
                            <td><?= date('d/m/Y', strtotime($o['order_date'])) ?></td>
                            <!-- Status            -->
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>