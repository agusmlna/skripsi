<?= $this->extend('home/template/base'); ?>

<?= $this->section('usercontent'); ?>
<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col">
            <h1 class="">Detail Reservasi</h1>
            <?php foreach ($reservasi as $r) : ?>
                <div class="container mt-4 py-3 px-3 border border-3 rounded-2" style=" padding: 15px; background-color: rgba (61,77,66,22); box-shadow: 5px 5px 5px lightblue; ">
                    <div class="row">
                        <table class="table table-borderless text-white">
                            <thead>
                                <tr>
                                    <th scope="col">Nama </th>
                                    <th scope="col">Email</th>
                                    <th scope="col">No Telepon</th>
                                    <th scope="col">No Meja</th>
                                    <th scope="col">tanggal</th>
                                    <th scope="col">jam</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?= $r['nama_pemesan']; ?></td>
                                    <td><?= $r['email']; ?></td>
                                    <td><?= $r['no_telpon']; ?></td>
                                    <td><?= $r['no_meja']; ?></td>
                                    <td><?= $r['tanggal']; ?></td>
                                    <td><?= $r['jam']; ?></td>
                                    <?php if ($r['status'] == 'Sukses') : ?>
                                        <td><span class="badge text-bg-success"><?= $r['status']; ?></td>
                                    <?php elseif ($r['status'] == 'Di Proses') : ?>
                                        <td><span class="badge text-bg-primary"><?= $r['status']; ?></td>
                                    <?php else : ?>
                                        <td><span class="badge text-bg-danger"><?= $r['status']; ?></td>
                                    <?php endif; ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row justify-content-end">
                        <div class="d-flex flex-wrap justify-content-between">
                            <h4 class="fs-4 pt-3">
                                <i class="fa-sharp fa-regular fa-circle-check fa-lg" style="color: #0fa404;"></i>
                                <span class="text-white">Pesanan segera di proses, Mohon menunggu pesanan anda</span>
                            </h4>

                            <div class="d-flex align-items-center shadow-sm rounded-3 p-2 mb-xl-0 mb-3">
                                <form action="/home/detailreservasi/delete/<?= $r['id']; ?>" method="delete" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_methode" value="DELETE">
                                    <button type="submit" class="fs-4 btn btn-danger rounded-3 mx-2" onclick="return confirm('apakah anda yakin?');">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- END OF ADS 
<?= $this->endSection(); ?>