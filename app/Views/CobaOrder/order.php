<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?php
if (session()->getFlashData('success')) {
?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <?= session()->getFlashData('success') ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php
}
?>

<?php
if (session()->getFlashData('danger')) {
?>
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <?= session()->getFlashData('danger') ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php
}
?>

<h1>welcome to coffee</h1>

<!-- NOTE: START LIST MENU AND RECIPES -->
<section>
  <?php foreach ($menu as $m) : ?>
    <div style="
          margin-top: 5px;
          padding: 10px;
          border-style: solid;
          border-color: red;
        ">
      <p>
        <?= $m['menu']; ?>
      </p>
      <p>RESEP</p>

      <!-- START FOREACH RECIPES JSON -->
      <?php $recipes = json_decode($m['recipe']);
      foreach ($recipes as $recipe) :
      ?>
        <p>
          <?= $recipe->name; ?>:
          <?= $recipe->quantity; ?>
        </p>
      <?php endforeach; ?>
      <!-- END FOREACH RECIPES JSON -->

      <!-- START BUTTON BUY-->
      <button>
        <a href="<?= base_url('coba-order/save/' . $m['id']) ?>">
          Buy
        </a>
      </button>
      <!-- END BUTTON BUY-->
    </div>
  <?php endforeach; ?>
</section>
<!-- NOTE: END LIST MENU AND RECIPES-->


<!-- NOTE: START BAHAN BAKU -->
<section id="bahan-baku">
  <p>Bahan Baku</p>
  <?php foreach ($stokBahan as $bahan) : ?>
    <div>
      <p>
        <?= $bahan['name']; ?>:
        <?= $bahan['quantity']; ?>
      </p>
    </div>
  <?php endforeach; ?>
</section>
<!-- NOTE: BAHAN BAKU -->

<?= $this->endSection(); ?>