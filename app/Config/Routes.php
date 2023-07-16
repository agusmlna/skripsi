<?php

namespace Config;


// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'SignController::index');
// route for sign in
$routes->get('/login', 'SignController::index');

// route for process sign in
$routes->post('/proseslogin', 'SignController::processLogin');

//route for process regist
$routes->get('/regist', 'SignController::regist');
$routes->post('/prosesregist', 'SignController::processRegist');

$routes->get('/logout', 'SignController::logout');

$routes->get('/admin', 'Dashboard::index');
$routes->get('/admin/menu', 'Menu::index');
$routes->get('/menu/detail/(:any)', 'Menu::detail/$1');
$routes->get('/menu/create', 'Menu::create');
$routes->get('/menu/edit/(:segment)', 'Menu::edit/$1');
$routes->post('/menu/update/(:segment)', 'Menu::update/$1');
$routes->post('/menu/save', 'Menu::save');
$routes->get('/menu/delete/(:num)', 'Menu::delete/$1');

// routes for stok bahan baku
$routes->get('/admin/stok-bahan', 'StokBahan::index');
$routes->get('/admin/stok-bahan/create', 'StokBahan::create');
$routes->post('/admin/stok-bahan/save', 'StokBahan::save');
$routes->get('/admin/stok-bahan/detail/(:any)', 'StokBahan::detail/$1');
$routes->get('/admin/stok-bahan/edit/(:segment)', 'StokBahan::edit/$1');
$routes->post('/admin/stok-bahan/update/(:segment)', 'StokBahan::update/$1');

// routes reservasi
$routes->get('/admin/reservasi', 'Reservasi::index');
$routes->post('/admin/reservasi', 'Reservasi::filter');
$routes->get('/admin/reservasi/delete/(:num)', 'Reservasi::delete/$1');
$routes->get('/admin/reservasi/sukses/(:any)', 'Reservasi::sukses/$1');

// routes Order
$routes->get('/admin/order', 'Order2::index');
$routes->get('/admin/order/detail/(:any)', 'Order2::detail/$1');
$routes->get('/admin/order/sukses/(:any)', 'Order2::sukses/$1');
$routes->get('/admin/order/laporanpenjualan', 'Order2::laporanpenjualan');
$routes->post('/admin/order/laporanpenjualan', 'Order2::filterandstatus');
$routes->get('/admin/order/laporanpembayaran', 'Order2::laporanpembayaran');
$routes->post('/admin/order/laporanpembayaran', 'Order2::filterandstatuspembayaran');
$routes->post('/admin/order/save/(:any)', 'Order2::savePayment/$1');
$routes->post('/admin/order', 'Order2::filter');

// routes kelola kostumer
$routes->get('/admin/kelolakostumer', 'User::kelolakostumer');

// routes coba order
$routes->get('/coba-order', 'Order::index');
$routes->get('/coba-order/save/(:any)', 'Order::save/$1');

// routes halaman user
$routes->get('/home', 'home::index');
$routes->get('home/pesan-produk', 'Produk::index');
$routes->post('/home/pesan-produk/save', 'Order2::save');

$routes->get('home/pesan-produk/buy/(:any)', 'Produk::buy/$1');

$routes->get('home/reservasi', 'Booking::index');
$routes->post('/home/reservasi/save', 'Reservasi::save');

$routes->get('home/promo', 'Promo::index');

$routes->get('home/rating', 'Rating::index');
$routes->post('home/rating/save/(:num)', 'Rating::save/$1');

$routes->get('home/detailtransaksi', 'Detailtransaksi::index');
$routes->get('home/detailtransaksi/delete/(:num)', 'Detailtransaksi::delete/$1');

$routes->get('home/detailreservasi', 'Detailreservasi::index');
$routes->get('home/detailreservasi/delete/(:num)', 'Detailreservasi::delete/$1');

$routes->get('/', 'PdfController::index');
$routes->get('/pdf/generate', 'PdfController::generate');
$routes->get('/pdf/generate/pembayaran', 'PdfController::generatePembayaran');
$routes->get('/pdf/generate/struk', 'PdfController::generateStruk');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
