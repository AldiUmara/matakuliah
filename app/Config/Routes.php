<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Beranda::index');
$routes->get('/perkenalan', 'perkenalan::index');
$routes->get('/contoh1', 'Contoh1::index');
$routes->get('/contoh1/penjumlahan/(:num)/(:num)', 'Contoh1::penjumlahan/$1/$2'); 

$routes->get('/thrift', 'Thrift::index');
$routes->get('/produk', 'Produk::index');

$routes->get('/login', 'Login::index');
$routes->get('/register', 'Register::index');
$routes->get('/beranda', 'Beranda::index');
$routes->get('/shop', 'Shop::index');
$routes->get('/contact', 'Contact::index');
$routes->get('/cart', 'Cart::index');
$routes->get('/wishlist', 'Wishlist::index');
$routes->get('/checkout', 'Checkout::index');
$routes->get('/product1', 'Product1::index');
$routes->get('/detail', 'Detail::index');
