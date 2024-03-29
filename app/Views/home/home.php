<?= $this->extend('home/template/base'); ?>

<?= $this->section('usercontent'); ?>
<!-- CAROUSEL BANNER -->
<section>
    <div class="container pt-4 pt-xl-5 mt-0 mt-xl-5">
        <div id="carouselExampleDark" class="carousel carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active indicator-dot" aria-current="true" aria-label="Slide 1"></button>
                <button class="indicator-dot" type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button class="indicator-dot" type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner bi bi-dot">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="img/wallpaper1.jpg" class="d-block w-100 rounded-3" alt="">
                    <div class="carousel-caption position-absolute top-50 translate-middle-y text-start">
                        <h1 class="mt-0 mt-xl-3 header-banner">Beli 2 Motasuren Gratis Kentang <br> Merayakan Hari Kemerdekaan</h1>
                        <p class="p-banner">Berlaku Hingga 20 Agustus 2023</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="img/wallpaper2.jpg" class="d-block w-100 rounded-3" alt="">
                    <div class="carousel-caption position-absolute top-50 translate-middle-y text-start">
                        <h1 class="mt-0 mt-xl-3 header-banner">Beli 2 Motasuren Gratis Kentang <br> Merayakan Hari Kemerdekaan</h1>
                        <p class="p-banner">Berlaku Hingga 20 Agustus 2023</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/wallpaper1.jpg" class="d-block w-100 rounded-3" alt="...">
                    <div class="carousel-caption position-absolute top-50 translate-middle-y text-start">
                        <h1 class="mt-0 mt-xl-3 header-banner">Beli 2 Motasuren Gratis Kentang <br> Merayakan Hari Kemerdekaan</h1>
                        <p class="p-banner">Berlaku Hingga 20 Agustus 2023</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev position-absolute top-50 start-0 translate-middle" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <div class="bungkus-chevron shadow">
                    <span class="bi bi-chevron-left fs-5 cai-color-text align-middle" aria-hidden="true"></span>
                </div>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next position-absolute top-50 start-100 translate-middle" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <div class="bungkus-chevron shadow">
                    <span class="bi bi-chevron-right fs-5 cai-color-text align-middle" aria-hidden="true"></span>
                </div>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<!-- Products Section start -->
<section id="menu" class="menu">
    <div class="container pt-4 pt-xl-5 mt-0 mt-xl-5">
        <h2><span>Menu</span> Kami</h2>
        <p>Berbagai macam menu coffee maupun non-coffee yang kami sediakan
        </p>

        <div class="row-coffee">
            <div class="menu-card">
                <img src="img/matchamilk.jpg" alt="Matcha" class="menu-card-img">
                <h3 class="menu-card-title">- Matcha Milk-</h3>
                <p class="menu-card-price">Perpaduan Bubuk Matcha Dengan Susu</p>
            </div>
            <div class="menu-card pt-3 px-3">
                <img src="img/taro1.jpeg" alt="Matcha" class="menu-card-img">
                <h3 class="menu-card-title">- Taro-</h3>
                <p class="menu-card-price">Perpaduan Bubuk Taro Dengan Susu</p>
            </div>
            <div class="menu-card">
                <img src="img/redvelvet.jpeg" alt="Matcha" class="menu-card-img">
                <h3 class="menu-card-title">- Red Velvet-</h3>
                <p class="menu-card-price">Perpaduan Bubuk RedVelvet Dengan Susu</p>
            </div>
            <div class="menu-card">
                <img src="img/blueocean.png" alt="Matcha" class="menu-card-img" style="width: 13.4rem;">
                <h3 class="menu-card-title">- Blue Ocean-</h3>
                <p class="menu-card-price">Perpaduan Soda Dengan Sirup Blue Ocean</p>
            </div>
            <div class="menu-card pt-4 px-3">
                <img src="img/motasuren2.png" alt="Matcha" class="menu-card-img" style="width: 12.5rem;">
                <h3 class=" menu-card-title">- Mota Suren-</h3>
                <p class="menu-card-price">Perpaduan Susu Dengan Gula Aren</p>
            </div>
            <div class="menu-card pt-4">
                <img src="img/coklat.png" alt="Matcha" class="menu-card-img" style="width: 12.5rem;">
                <h3 class=" menu-card-title">- Coklat-</h3>
                <p class="menu-card-price">Perpanduan Bubuk Coklat Dengan Susu</p>
            </div>
            <div class="menu-card ">
                <img src="img/vanilla.png" alt="Matcha" class="menu-card-img" style="width: 12.5rem;">
                <h3 class=" menu-card-title">- Vanilla-</h3>
                <p class="menu-card-price">Perpanduan Bubuk Coklat Dengan Susu</p>
            </div>
            <div class="menu-card pt-5 px-3">
                <img src="img/caramel.png" alt="Matcha" class="menu-card-img" style="width: 23.5rem;">
                <h3 class=" menu-card-title">- Caramel-</h3>
                <p class="menu-card-price">Perpanduan Bubuk Coklat Dengan Susu</p>
            </div>
            <div class="menu-card">
                <img src="img/hazelnut.png" alt="Matcha" class="menu-card-img" style="width: 12.5rem;">
                <h3 class=" menu-card-title">- Hazelnut-</h3>
                <p class="menu-card-price">Perpanduan Bubuk Coklat Dengan Susu</p>
            </div>
        </div>
    </div>
</section>
<!-- Products Section end -->

<div class="container pt-2 pt-xl-5 mt-0 mt-xl-5">
    <div class="row justify-content-around ms-5 ps-3">
        <div class="col-4">
            <h1 class="pb-5 fw-bold">CERITA KAMI</h1>
            <h5>Nama Motamorph yang diambil dari kata Atom sebagai satuan dasar sebuah materi pemilihan kata atom menggambarkan para owner yang berasal dari Jurasan IPA sehingga menjadi pengingat darimana kami berasal dan pertama kali bertemu.</h5>
            <br>
            <h5>Morph sendiri berbarti perubahan, perubahan yang ampu memberikan dampak positif bagi sekitar dan bagi kami.</h5>
        </div>
        <div class="col-4">
            <img src="img/coffeeshop.png" alt="" width="250x">
        </div>
    </div>
</div>

<div class="container pt-5">

    <h1 class="text-center fw-bold">IMAGE GALLERY</h1>
    <div class="image-container">
        <div class="image"><img src="img/moment1jpg.jpg" alt=""></div>
        <div class="image"><img src="img/moment2.jpg" alt=""></div>
        <div class="image"><img src="img/moment3.jpg" alt=""></div>
        <div class="image"><img src="img/moment4.jpg" alt=""></div>
        <div class="image"><img src="img/moment5.jpg" alt=""></div>
        <div class="image"><img src="img/moment6.jpg" alt=""></div>
    </div>

    <div class="popup-image">
        <span>&times;</span>
        <img src="img/liyue_1.png" alt="">
    </div>
</div>


<div class="container">
    <div class="row py-5">
        <div class="col">
            <h1 class="text-center fw-bold">CONTACT US</h1>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <a href="default.asp"><i class="fa-brands fa-instagram fa-shake fa-5x px-5 mx-3" style="color: #ffffff;"></i></a>
            <p class="pt-3">INSTAGRAM</p>
            <a href="http://">@motamorph.co</a>
        </div>
        <div class="col text-center">
            <a href="default.asp"><i class="fa-solid fa-envelope fa-shake fa-5x px-5 mx-3" style="color: #ffffff;"></i></a>
            <p class="pt-3">EMAIL</p>
            <a href="http://">morphmota@gmail.com</a>
        </div>
        <div class="col text-center">
            <a href="default.asp"><i class="fa-brands fa-whatsapp fa-shake fa-5x px-5 mx-3" style="color: #ffffff;"></i></a>
            <p class="pt-3">WHATSAPP</p>
            <a href="http://">087770187708</a>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>