<?= $this->extend('home/template/base'); ?>

<?= $this->section('usercontent'); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-4 text-center m-auto">
            <h1><span id="avg_rating">0.0</span>/5.0</h1>
            <div>
                <i class="fa fa-star star-light main_star mr-1"></i>
                <i class="fa fa-star star-light main_star mr-1"></i>
                <i class="fa fa-star star-light main_star mr-1"></i>
                <i class="fa fa-star star-light main_star mr-1"></i>
                <i class="fa fa-star star-light main_star mr-1"></i>
            </div>
            <span id="total_review">0</span> Reviews
        </div>
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
</div>

<div class="modal" id="myModal">
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
                    <i class="fa fa-star star-light submit_star  mr-1 " id='submit_star_1' data-rating='1'></i>
                    <i class="fa fa-star star-light submit_star  mr-1 " id='submit_star_2' data-rating='2'></i>
                    <i class="fa fa-star star-light submit_star   mr-1 " id='submit_star_3' data-rating='3'></i>
                    <i class="fa fa-star star-light submit_star  mr-1 " id='submit_star_4' data-rating='4'></i>
                    <i class="fa fa-star star-light submit_star  mr-1 " id='submit_star_5' data-rating='5'></i>
                </h4>
                <div class="form-group">
                    <input type="text" class="form-control" id='userName' name='userName' placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <textarea name="userMessage" id="userMessage" class="form-control" placeholder="Enter message"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn-primary" id='sendReview'>Submit</button>
                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>