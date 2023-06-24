<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Data Stok Bahan</h2>
            <?php if (session()->has('validation')) : ?>
                <div class="text-danger">
                    <p>errors</p>
                </div>
            <?php endif; ?>
            <form action="/admin/stok-bahan/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Nama Bahan Baku</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" autofocus>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="quantity" class="col-sm-2 col-form-label">quantity</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="quantity" name="quantity">
                    </div>
                </div>
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Satuan</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="satuan" id="gridRadios1" value="ml" checked>
                            <label class="form-check-label" for="gridRadios1">
                                ml
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="satuan" id="gridRadios2" value="gram">
                            <label class=" form-check-label" for="gridRadios2">
                                gram
                            </label>
                        </div>
                    </div>
                </fieldset>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>