<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Detail Menu</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/<?= $menu['sampul']; ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $menu['menu']; ?></h5>
                            <p class="card-text"><b>Harga : </b><?= $menu['harga']; ?></p>
                            <p class="card-text"><b>Tipe Minuman : </b><?= $menu['tipe']; ?></p>

                            <a href="/menu/edit/<?= $menu['menu']; ?>" class="btn btn-warning">Edit</a>


                            <form action="/menu/delete/<?= $menu['id']; ?>" method="delete" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_methode" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</button>
                            </form>
                            <!-- <a href="/menu/delete/<?= $menu['id']; ?>" class="btn btn-danger">Delete</a> -->
                            <br><br>
                            <a href="/admin/menu">Kembali ke daftar menu</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>