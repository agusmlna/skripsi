<nav class="navbar navbar-expand-lg bg-light">

    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="<?= base_url('/'); ?>">Home</a>
                <a class="nav-link" href="<?= base_url('/admin/order'); ?>">Pesanan</a>
                <a class="nav-link" href="/admin/reservasi">Reservasi</a>
                <a class="nav-link" href="/admin/menu">Menu</a>
                <a class="nav-link" href="/admin/stok-bahan">stok bahan</a>
                <a class="nav-link" href="/coba-order">coba order</a>
            </div>
        </div>
    </div>

</nav>