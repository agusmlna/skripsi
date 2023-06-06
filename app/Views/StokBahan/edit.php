<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Ubah Stok Bahan Baku</h2>



            <?php if (session()->has('validation')) : ?>
                <div class="text-danger">
                    <p>errors</p>
                </div>
            <?php endif; ?>

            <form action="admin/stok-bahan/update/<?= $stokBahan['name']; ?>" method="post">
                <?= csrf_field(); ?>
                <input type="hidden" name="stokBahan" value="<?= $stokBahan['id']; ?>">
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Nama Bahan Baku</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" autofocus value="<?= $stokBahan['name']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="harga" class="col-sm-2 col-form-label">Stok</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="quantity" name="quantity" value="<?= $stokBahan['quantity']; ?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>