<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Ubah Data Menu</h2>



            <?php if (session()->has('validation')) : ?>
                <div class="text-danger">
                    <p>errors</p>
                </div>
            <?php endif; ?>

            <form action="/menu/update/<?= $menu['id']; ?>" method="post">
                <?= csrf_field(); ?>
                <input type="hidden" name="menu" value="<?= $menu['id']; ?>">
                <div class="row mb-3">
                    <label for="menu" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="menu" name="menu" autofocus value="<?= $menu['menu']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="harga" name="harga" value="<?= $menu['harga']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="sampul" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="sampul" name="sampul" value="<?= $menu['sampul']; ?>">
                    </div>
                </div>
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Jenis</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tipe" id="gridRadios1" value="coffee" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Coffee
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tipe" id="gridRadios2" value="non-coffee">
                            <label class=" form-check-label" for="gridRadios2">
                                Non Coffee
                            </label>
                        </div>
                    </div>
                </fieldset>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>