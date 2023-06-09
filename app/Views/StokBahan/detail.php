<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Detail Bahan Baku</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $stokBahan['name']; ?></h5>
                            <p class="card-text"><b>Stok : </b><?= $stokBahan['quantity']; ?></p>

                            <a href="/admin/stok-bahan/edit/<?= $stokBahan['name']; ?>" class="btn btn-warning">Edit</a>


                            <form action="admin/stok-bahan/delete/<?= $stokBahan['id']; ?>" method="delete" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_methode" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</button>
                            </form>
                            <!-- <a href="/menu/delete/<?= $stokBahan['id']; ?>" class="btn btn-danger">Delete</a> -->
                            <br><br>
                            <a href="/admin/stok-bahan">Kembali ke daftar Bahan Baku</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>