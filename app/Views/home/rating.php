<?= $this->extend('home/template/base'); ?>

<?= $this->section('usercontent'); ?>

<?php
$rating1 = 0;
$rating2 = 0;
$rating3 = 0;
$rating4 = 0;
$rating5 = 0;

foreach ($rating as $r) {
    switch ($r['rating']) {
        case 1:
            $rating1 += 1;
            break;
        case 2:
            $rating2 += 1;
            break;
        case 3:
            $rating3 += 1;
            break;
        case 4:
            $rating4 += 1;
            break;
        case 5:
            $rating5 += 1;
            break;
    }
}

$totalRating = count($rating);

$average1 = ($rating1 / $totalRating) * 100;
$average2 = ($rating2 / $totalRating) * 100;
$average3 = ($rating3 / $totalRating) * 100;
$average4 = ($rating4 / $totalRating) * 100;
$average5 = ($rating5 / $totalRating) * 100;


?>


<div class="container pt-5 mt-5">
    <div class="row justify-content-center">
        <div class="col-sm-4 progressSection">
            <div class='holder'>
                <div>
                    <div class="progress-label-left">
                        <b>5</b> <i class="fa fa-star mr-1 text-warning"></i>
                    </div>
                    <div class="progress-label-right">
                        <span id="total_five_star_review"> <?= $rating5; ?> </span> Reviews
                    </div>

                </div>

                <div class="progress">
                    <div class="progress-bar bg-warning" id='five_star_progress' style=<?= "width:$average5% " ?> aria-valuenow=<?= $average5; ?>>

                    </div>
                </div>
            </div>
            <div class='holder'>
                <div>
                    <div class="progress-label-left">
                        <b>4</b> <i class="fa fa-star mr-1 text-warning"></i>
                    </div>
                    <div class="progress-label-right">
                        <span id="total_four_star_review"> <?= $rating4; ?> </span> Reviews
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-warning" id='four_star_progress' style=<?= "width:$average4% " ?> aria-valuenow=<?= $average4; ?>>

                    </div>
                </div>
            </div>
            <div class='holder'>
                <div>
                    <div class="progress-label-left">
                        <b>3</b> <i class="fa fa-star mr-1 text-warning"></i>
                    </div>
                    <div class="progress-label-right">
                        <span id="total_three_star_review"> <?= $rating3; ?> </span> Reviews
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-warning" id='three_star_progress' style=<?= "width:$average3% " ?> aria-valuenow=<?= $average3; ?>>

                    </div>
                </div>
            </div>
            <div class='holder'>
                <div>
                    <div class="progress-label-left">
                        <b>2</b> <i class="fa fa-star mr-1 text-warning"></i>
                    </div>
                    <div class="progress-label-right">
                        <span id="total_two_star_review"> <?= $rating2; ?> </span> Reviews
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-warning" id='two_star_progress' style=<?= "width:$average2% " ?> aria-valuenow=<?= $average2; ?>>

                    </div>
                </div>
            </div>
            <div class='holder'>
                <div>
                    <div class="progress-label-left">
                        <b>1</b> <i class="fa fa-star mr-1 text-warning"></i>
                    </div>
                    <div class="progress-label-right">
                        <span id="total_one_star_review"> <?= $rating1; ?> </span> Reviews
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-warning" id='one_star_progress' style=<?= "width:$average1% " ?> aria-valuenow=<?= $average1; ?>>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="col-sm-4 text-center m-auto">
        <button class="btn-primary" id='add_review'> Add Review </button>
    </div> -->

    <div id="display_review">

    </div>


    <div class="px-xl-4 px-2">
        <h2 class="fw-bold text-center">Ulasan</h2>
        <hr>
        <?php foreach ($rating as $r) : ?>
            <?php
            $arrOrderMenuName = array();
            $order = json_decode($r['order_menu']);
            for ($i = 0; $i < count($order); $i++) {
                array_push($arrOrderMenuName, $order[$i]->menu);
            }

            $orderMenu = join(", ", $arrOrderMenuName);
            ?>
            <div class="d-flex">
                <div>
                    <div class="container pe-4">
                        <div class="row border border-3 rounded-5 px-2 py-2">
                            <h1>A</h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="fw-bold nopadding"><?= $r['name']; ?>
                        <span class="text-secondary"><?= $orderMenu; ?></span>
                    </h6>
                    <div class="d-flex fs-6" style="color: #FFB813;">
                        <?php for ($i = 0; $i < 5; $i++) : ?>
                            <?php if ($i < $r['rating']) : ?>
                                <i class="fa-solid fa-star" style="color: #f3d853;"></i>
                            <?php else : ?>
                                <i class="fa-regular fa-star" style="color: #f3d853;"></i>
                            <?php endif; ?>
                        <?php endfor; ?>
                        <span class="text-secondary ps-2"><?= date('d/M/Y', strtotime($r['tanggal'])); ?></span>
                    </div>
                    <p class="fs-5"><?= $r['pesan']; ?></p>
                </div>
            </div>
            <hr>
        <?php endforeach; ?>

    </div>
</div>


<?= $this->endSection(); ?>