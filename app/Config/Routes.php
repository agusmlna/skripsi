<?php

namespace Config;

use App\Controllers\Menu;

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
$routes->get('admin/login', 'SignController::index');

// route for process sign in
$routes->post('/proseslogin', 'SignController::processLogin');

$routes->get('/pages', 'Pages::index');
$routes->get('/pages/about', 'Pages::about');
$routes->get('/pages/contact', 'Pages::contact');
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

// routes Order
$routes->get('/admin/order', 'Order2::index');

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
