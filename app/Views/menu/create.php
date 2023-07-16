<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Data Menu</h2>
            <?php if (session()->has('validation')) : ?>
                <div class="text-danger">
                    <p>errors</p>
                </div>
            <?php endif; ?>

            <form action="/menu/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="menu" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="menu" name="menu" autofocus>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="harga" name="harga">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="foto-produk" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="foto-produk" name="foto-produk">
                            <label class="input-group-text" for="foto-produk">Pilih gambar..</label>
                        </div>
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

                <!-- start resep -->
                <div>
                    <div class="row mb-3">
                        <label for="resep" class="col-form-label">Resep</label>
                        <label for="nama-bahan" class="col-sm-2 col-form-label">bahan baku</label>
                        <div class="dropdown col-sm-10">
                            <button class="btn btn-secondary dropdown-toggle dropdown-text-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                nama bahan baku
                            </button>
                            <ul class="dropdown-menu">
                                <?php $index = 0; ?>
                                <?php foreach ($bahanBaku as $b) : ?>
                                    <?php $index++; ?>
                                    <li class="item-1"><a class="dropdown-item" href="#"><?= $b['name']; ?>
                                        </a>
                                        <div id="item-id-<?= $index; ?>" class="d-none"><?= $b['id']; ?></div>
                                    </li>

                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <input type='hidden' id='id-1' name="id-bahan-1" value='' />
                        <input type='hidden' id='name-1' name="nama-bahan-1" value='' />
                    </div>
                    <div class="row mb-3">
                        <label for="quantity-1" class="col-sm-2 col-form-label">quantity</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="quantity-1" name="quantity-1">
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <!--  -->
                    <div class="row mb-3">
                        <label for="nama-bahan" class="col-sm-2 col-form-label">bahan baku</label>
                        <div class="dropdown col-sm-10">
                            <button class="btn btn-secondary dropdown-toggle dropdown-text-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                nama bahan baku
                            </button>
                            <ul class="dropdown-menu">
                                <?php $index = 0; ?>
                                <?php foreach ($bahanBaku as $b) : ?>
                                    <?php $index++; ?>
                                    <li class="item-2"><a class="dropdown-item" href="#"><?= $b['name']; ?>
                                        </a>
                                        <div id="item-id-<?= $index; ?>" class="d-none"><?= $b['id']; ?></div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <input type='hidden' id='id-2' name="id-bahan-2" value='' />
                        <input type='hidden' id='name-2' name="nama-bahan-2" value='' />
                    </div>
                    <div class="row mb-3">
                        <label for="quantity-2" class="col-sm-2 col-form-label">quantity</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="quantity-2" name="quantity-2">
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <!--  -->
                    <div class="row mb-3">
                        <label for="nama-bahan" class="col-sm-2 col-form-label">bahan baku</label>
                        <div class="dropdown col-sm-10">
                            <button class="btn btn-secondary dropdown-toggle dropdown-text-3" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                nama bahan baku
                            </button>
                            <ul class="dropdown-menu">
                                <?php $index = 0; ?>
                                <?php foreach ($bahanBaku as $b) : ?>
                                    <?php $index++; ?>
                                    <li class="item-3"><a class="dropdown-item" href="#"><?= $b['name']; ?>
                                        </a>
                                        <div id="item-id-<?= $index; ?>" class="d-none"><?= $b['id']; ?></div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <input type='hidden' id='id-3' name="id-bahan-3" value='' />
                        <input type='hidden' id='name-3' name="nama-bahan-3" value='' />
                    </div>
                    <div class="row mb-3">
                        <label for="quantity-3" class="col-sm-2 col-form-label">quantity</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="quantity-3" name="quantity-3">
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <!--  -->
                    <div class="row mb-3">
                        <label for="nama-bahan" class="col-sm-2 col-form-label">bahan baku</label>
                        <div class="dropdown col-sm-10">
                            <button class="btn btn-secondary dropdown-toggle dropdown-text-3" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                nama bahan baku
                            </button>
                            <ul class="dropdown-menu">
                                <?php $index = 0; ?>
                                <?php foreach ($bahanBaku as $b) : ?>
                                    <?php $index++; ?>
                                    <li class="item-4"><a class="dropdown-item" href="#"><?= $b['name']; ?>
                                        </a>
                                        <div id="item-id-<?= $index; ?>" class="d-none"><?= $b['id']; ?></div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <input type='hidden' id='id-4' name="id-bahan-4" value='' />
                        <input type='hidden' id='name-4' name="nama-bahan-4" value='' />
                    </div>
                    <div class="row mb-3">
                        <label for="quantity-4" class="col-sm-2 col-form-label">quantity</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="quantity-4" name="quantity-4">
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <!--  -->
                    <div class="row mb-3">
                        <label for="nama-bahan" class="col-sm-2 col-form-label">bahan baku</label>
                        <div class="dropdown col-sm-10">
                            <button class="btn btn-secondary dropdown-toggle dropdown-text-3" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                nama bahan baku
                            </button>
                            <ul class="dropdown-menu">
                                <?php $index = 0; ?>
                                <?php foreach ($bahanBaku as $b) : ?>
                                    <?php $index++; ?>
                                    <li class="item-5"><a class="dropdown-item" href="#"><?= $b['name']; ?>
                                        </a>
                                        <div id="item-id-<?= $index; ?>" class="d-none"><?= $b['id']; ?></div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <input type='hidden' id='id-5' name="id-bahan-5" value='' />
                        <input type='hidden' id='name-5' name="nama-bahan-5" value='' />
                    </div>
                    <div class="row mb-3">
                        <label for="quantity-5" class="col-sm-2 col-form-label">quantity</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="quantity-5" name="quantity-5">
                        </div>
                    </div>
                </div>
                <!-- end resep -->


                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>