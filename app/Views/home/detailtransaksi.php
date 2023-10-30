<?= $this->extend('home/template/base'); ?>

<?= $this->section('usercontent'); ?>
<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col">
            <h1 class="">Riwayat Pembelian</h1>
            <?php foreach ($orders as $o) : ?>
                <div class="container mt-4 py-3 px-3 border border-3 rounded-2" style=" padding: 15px; background-color: rgba (61,77,66,22); box-shadow: 5px 5px 5px lightblue; ">
                    <div class="row">
                        <table class="table table-borderless text-dark">
                            <thead>
                                <tr>
                                    <th scope="col">No Pesanan</th>
                                    <th scope="col">Nama Menu</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Nama Pembeli</th>
                                    <th scope="col">Status Pesanan</th>
                                    <th scope="col">Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"><?= $o['id']; ?></th>
                                    <td>
                                        <?php foreach (json_decode($o['order_menu']) as $m) : ?>
                                            <?= $m->menu; ?>
                                            <br>
                                        <?php endforeach; ?>
                                    </td>
                                    <td><?= $o['total']; ?></td>
                                    <td><?= $o['customer_name']; ?></td>
                                    <?php if ($o['status'] == 'Sukses') : ?>
                                        <td><span class="badge text-bg-success"><?= $o['status']; ?></td>
                                    <?php elseif ($o['status'] == 'Di Proses') : ?>
                                        <td><span class="badge text-bg-success"><?= $o['status']; ?></td>
                                    <?php else : ?>
                                        <td><span class="badge text-bg-danger"><?= $o['status']; ?></td>
                                    <?php endif; ?>
                                    <td><?= $o['order_date']; ?></td>
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

                            <div class="col-sm-4 text-center m-auto">
                                <button class="btn-primary" id='add_review' onclick="returnToModal(<?= $o['id']; ?>)" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button"> Add Review </button>
                            </div>
                            <?php if (strtotime("{$o['order_date']} + 5 minute") >= strtotime(date("Y-m-d H:i:s"))) : ?>
                                <div class="d-flex align-items-center shadow-sm rounded-3 p-2 mb-xl-0 mb-3">

                                    <form action="/home/detailtransaksi/delete/<?= $o['id']; ?>" method="delete" class="d-inline button-delete">
                                        <?= csrf_field(); ?>
                                        <div class="d-none"><?= $o['order_date']; ?></div>
                                        <input type="hidden" name="_methode" value="DELETE">
                                        <button type="submit" class="fs-4 btn btn-danger rounded-3 mx-2" onclick="return confirm('apakah anda yakin?');">Delete</button>
                                    </form>
                                </div>

                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<form onsubmit='return submitRating(this)' method="post" action="">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title text-dark">Write your Review</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body text-center">
                    <h4>
                        <input type="radio" value="1" name="rating" id='input_star_1' class="d-none" />
                        <input type="radio" value="2" name="rating" id='input_star_2' class="d-none" />
                        <input type="radio" value="3" name="rating" id='input_star_3' class="d-none" />
                        <input type="radio" value="4" name="rating" id='input_star_4' class="d-none" />
                        <input type="radio" value="5" name="rating" id='input_star_5' class="d-none" />

                        <label class="fa fa-star star-light submit_star  mr-1 " for="input_star_1" id='submit_star_1' data-rating='1'></label>
                        <label class="fa fa-star star-light submit_star  mr-1 " for="input_star_2" id='submit_star_2' data-rating='2'></label>
                        <label class="fa fa-star star-light submit_star  mr-1 " for="input_star_3" id='submit_star_3' data-rating='3'></label>
                        <label class="fa fa-star star-light submit_star  mr-1 " for="input_star_4" id='submit_star_4' data-rating='4'></label>
                        <label class="fa fa-star star-light submit_star  mr-1 " for="input_star_5" id='submit_star_5' data-rating='5'></label>
                    </h4>
                    <div class="form-group">
                        <input type="text" class="form-control" id='userName' name='name' placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <textarea name="pesan" id="userMessage" class="form-control" placeholder="Enter message"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn-primary" id='' type="submit">Submit</button>
                    </div>
                </div>

                <hr>
            </div>
        </div>
    </div>
</form>
<?= $this->endSection(); ?>