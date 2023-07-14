<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="my-1"> Daftar Data Reservasi</h1>
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
                            <button type="button" class="btn btn-outline-dark">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Pemesan</th>
                        <th scope="col">Email</th>
                        <th scope="col">No Telepon</th>
                        <th scope="col">No Meja</th>
                        <th scope="col">tanggal</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($reservasi as $r) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $r['nama_pemesan']; ?></td>
                            <td><?= $r['email']; ?></td>
                            <td><?= $r['no_telpon']; ?></td>
                            <td><?= $r['no_meja']; ?></td>
                            <td><?= $r['tanggal']; ?></td>
                            <td>
                                <a href="/admin/order/sukses/" class="btn btn-success"><i class="fa-solid fa-check"></i></a>
                                <a href="/admin/order/detail/" class="btn btn-danger"><i class="fa-solid fa-xmark" style="color: #ffffff;"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>