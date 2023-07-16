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
            <div class="container py-3 my-3 border">
                <div class="row">
                    <div class="col">
                        <h4> Filter Data</h4>
                    </div>
                </div>
                <hr>
                <form action="/admin/reservasi" method="post">
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
                </form>
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
                        <th scope="col">Status</th>
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
                            <?php if ($r['status'] == 'Sukses') : ?>
                                <td><span class="badge text-bg-success"><?= $r['status']; ?></td>
                            <?php elseif ($r['status'] == 'Di Proses') : ?>
                                <td><span class="badge text-bg-primary"><?= $r['status']; ?></td>
                            <?php else : ?>
                                <td><span class="badge text-bg-danger"><?= $r['status']; ?></td>
                            <?php endif; ?>
                            <td>
                                <a href="/admin/reservasi/sukses/<?= $r['id']; ?>" class="btn btn-success"><i class="fa-solid fa-check"></i></a>
                                <a href="/admin/reservasi/delete/<?= $r['id']; ?>" class="btn btn-danger"><i class="fa-solid fa-xmark" style="color: #ffffff;"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>