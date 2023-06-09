<?= $this->extend('home/template/base'); ?>

<?= $this->section('usercontent'); ?>

<div class="container pt-5 mt-5">
    <div class="row">
        <h1 class="text-center">Reservasi</h1>
        <div class="col-6">
            <h3>Pesan Meja</h3>
            <p>Lengkapi data-data di bawah ini</p>
            <form action="/home/reservasi/save" method="post" enctype="multipart/form-data" class="row g-3">
                <div class="col-md-6">
                    <label for="nama_depan_pemesan" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="inputNamaDepan" name="nama_depan_pemesan">
                    <div id="textHelp" class="form-text">Nama depan</div>
                </div>
                <div class="col-md-6">
                    <label for="nama_belakang_pemesan" class="form-label">-</label>
                    <input type="text" class="form-control" id="inputNamaBelakang" name="nama_belakang_pemesan">
                    <div id="textHelp" class="form-text">Nama belakang</div>
                </div>
                <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="Email" class="form-control" id="inputEmail" name="email">
                </div>
                <div class="col-12">
                    <label for="no_telpon" class="form-label">No Telpon</label>
                    <input type="text" class="form-control" id="inputTelpon" name="no_telpon">
                </div>
                <div class="col-md-6">
                    <label for="meja" class="form-label">Pilih Meja</label>
                    <select id="inputMeja" class="form-select" aria-label="Default select example">
                        <option selected>Silahkan Pilih Meja</option>
                        <option value="one">One</option>
                        <option value="two">Two</option>
                        <option value="three">Three</option>
                        <option value="four">Four</option>
                        <option value="five">Five</option>
                        <option value="six">Six</option>
                    </select>
                    <input type='hidden' id='meja' name="meja" value='' />
                </div>
                <section class="container">
                    <h2 class="py-2">Pilih Tanggal</h2>
                    <div class="row">
                        <label for="tanggal" class="col-1 col-form-label">Date</label>
                        <div class="col-5 pb-3">
                            <div class="input-group date" id="datepicker">
                                <input type="text" class="form-control" id="inputTanggal" name="tanggal" />
                                <span class="input-group-append">
                                    <span class="input-group-text bg-light d-block">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-confirm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Launch demo modal
                </button>

                <!-- Modal -->
                <div class="modal fade text-dark" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Data Reservasi</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5 class="">Nama Lengkap : </h5>
                                <p>
                                    <span class="nama-depan">agus</span>
                                    <span class="nama-belakang">agus</span>
                                </p>
                                <h5 class="">Email : </h5>
                                <p class="modal-email">bassram71@gmail.com</p>
                                <h5 class="">No Telpon : </h5>
                                <p class="modal-telpon">087861869173</p>
                                <h5 class="">Pilih Meja : </h5>
                                <p class="modal-meja">Six</p>
                                <h5>Tanggal : </h5>
                                <p class="modal-tanggal">29/05/2023</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Apakah data diatas sudah benar ?
                                    </label>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Benar</button>

                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
        <div class="col-6">
            <img src="/img/reservasi.png" alt="" width="600x">
        </div>
    </div>
</div>

<?= $this->endSection(); ?>