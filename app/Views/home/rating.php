<?= $this->extend('home/template/base'); ?>

<?= $this->section('usercontent'); ?>

<div class="container pt-5 mt-5">
    <div class="row">
        <div class="col-sm-4 progressSection">
            <div class='holder'>
                <div>
                    <div class="progress-label-left">
                        <b>5</b> <i class="fa fa-star mr-1 text-warning"></i>
                    </div>
                    <div class="progress-label-right">
                        <span id="total_five_star_review"> 0 </span> Reviews
                    </div>

                </div>

                <div class="progress">
                    <div class="progress-bar bg-warning" id='five_star_progress'>

                    </div>
                </div>
            </div>
            <div class='holder'>
                <div>
                    <div class="progress-label-left">
                        <b>4</b> <i class="fa fa-star mr-1 text-warning"></i>
                    </div>
                    <div class="progress-label-right">
                        <span id="total_four_star_review"> 0 </span> Reviews
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-warning" id='four_star_progress'>

                    </div>
                </div>
            </div>
            <div class='holder'>
                <div>
                    <div class="progress-label-left">
                        <b>3</b> <i class="fa fa-star mr-1 text-warning"></i>
                    </div>
                    <div class="progress-label-right">
                        <span id="total_three_star_review"> 0 </span> Reviews
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-warning" id='three_star_progress'>

                    </div>
                </div>
            </div>
            <div class='holder'>
                <div>
                    <div class="progress-label-left">
                        <b>2</b> <i class="fa fa-star mr-1 text-warning"></i>
                    </div>
                    <div class="progress-label-right">
                        <span id="total_two_star_review"> 0 </span> Reviews
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-warning" id='two_star_progress'>

                    </div>
                </div>
            </div>
            <div class='holder'>
                <div>
                    <div class="progress-label-left">
                        <b>1</b> <i class="fa fa-star mr-1 text-warning"></i>
                    </div>
                    <div class="progress-label-right">
                        <span id="total_one_star_review"> 0 </span> Reviews
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-warning" id='one_star_progress'>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 text-center m-auto">
            <button class="btn-primary" id='add_review'> Add Review </button>
        </div>
    </div>

    <div id="display_review">

    </div>


    <div class="px-xl-4 px-2">
        <hr>
        <h2 class="fw-bold text-center">Ulasan</h2>
        <div class="d-flex">
            <div>
                <div class="container pe-4">
                    <div class="row border border-3 rounded-5 px-2 py-2">
                        <h1>A</h1>
                    </div>
                </div>
            </div>
            <div>
                <h6 class="fw-bold nopadding">Agus Maulana</h6>
                <div class="d-flex fs-6" style="color: #FFB813;">
                    <i class="fa-solid fa-star" style="color: #f3d853;"></i>
                    <i class="fa-solid fa-star" style="color: #f3d853;"></i>
                    <i class="fa-solid fa-star" style="color: #f3d853;"></i>
                    <i class="fa-solid fa-star" style="color: #f3d853;"></i>
                    <i class="fa-solid fa-star" style="color: #f3d853;"></i>
                    <span class="text-secondary ps-2">6 hari lalu</span>
                </div>
                <p class="fs-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati culpa, placeat et suscipit porro doloribus maxime assumenda ipsam pariatur repudiandae eius fugit, sit aperiam ipsa distinctio provident dignissimos dolorem beatae!</p>
            </div>
        </div>
        <hr>

    </div>
</div>

<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title text-dark">Write your Review</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form action="/home/rating/save" method="post">
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
                        <button class="btn-primary" id='sendReview'>Submit</button>
                    </div>
                </div>
            </form>

            <hr>
        </div>
    </div>

    <?= $this->endSection(); ?>