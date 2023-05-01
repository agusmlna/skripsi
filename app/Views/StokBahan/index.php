<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <a href="/admin/stok-bahan/create" class="btn btn-primary my-3">Tambah stok bahan baku</a>
      <h1 class="my-1"> Daftar stok bahan baku</h1>
      <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
          <?= session()->getFlashdata('pesan'); ?>
        </div>
      <?php endif; ?>
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">quantity</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($stokBahan as $s) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $s['name']; ?></td>
              <td><?= $s['quantity']; ?></td>
              <td>
                <a href="admin/stok-bahan/detail/<?= $s['name']; ?>" class="btn btn-success">Detail</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>