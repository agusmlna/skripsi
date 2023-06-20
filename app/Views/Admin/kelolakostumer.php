<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="my-1"> Daftar Data Kostumer</h1>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Pemesan</th>
                        <th scope="col">Email</th>
                        <th scope="col">No Telepon</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($User as $u) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $u['username']; ?></td>
                            <td><?= $u['email']; ?></td>
                            <td><?= $u['no_telpon']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>