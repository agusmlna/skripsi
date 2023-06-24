<nav class="navbar navbar-expand-lg bg-warning">

    <div class="container-fluid">
        <a class="navbar-brand" href="#">MotaMorph</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav text-end">
                <a class="nav-link active" aria-current="page" href="<?= base_url('/admin'); ?>">Dashboard</a>
                <a class="nav-link active" href="<?= base_url('/admin/order'); ?>">Pesanan</a>
                <a class="nav-link active" href="/admin/reservasi">Reservasi</a>
                <a class="nav-link active" href="/admin/menu">Menu</a>
                <a class="nav-link active" href="/admin/stok-bahan">stok bahan</a>
                <a class="nav-link active" href="/admin/kelolakostumer">Kelola Kostumer</a>
                <a class="nav-link active" href="/coba-order">coba order</a>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user" style="color: #000000;"></i>
                        Hallo, Admin
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="/login">Logout</a></li>
                    </ul>
                </li>
            </div>
        </div>
    </div>

</nav>