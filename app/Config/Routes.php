<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Pages'); 
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Pages::view/home');
$routes->get('about', 'Pages::view/about');
$routes->get('browse', 'Pages::view/browse');

$routes->get('ajax-search', 'Search::ajaxSearch');

$routes->group('browse', static function ($routes) {
    $routes->get('(:segment)', 'Browse::view/$1');
    $routes->get('(:segment)/(:any)', 'Word::view/$2');
});

$routes->get('login','Login::index');
$routes->post('login/auth','Login::auth');
$routes->get('admin','Admin::view',['filter' => 'auth']);

$routes->group('admin', static function ($routes) {
    $routes->get('add','Admin::add');
    $routes->post('store','Admin::store');
    $routes->get('edit/(:num)','Admin::edit/$1');
    $routes->post('update/(:num)','Admin::update/$1');
    $routes->get('delete/(:num)','Admin::delete/$1');
});


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
