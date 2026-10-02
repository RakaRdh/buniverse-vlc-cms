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
$routes->get('/', 'Home::index');
$routes->get('/ids', 'Home::ids');
$routes->get('/about_us', 'Home::aboutus');
$routes->get('/live_streaming', 'Home::livestreaming');
$routes->get('/live_streaming/recommendation_video', 'Home::recommendvideo');
$routes->get('/programs', 'Home::programs');
$routes->get('/programs/programs_detail', 'Home::programsdetail');
$routes->get('/anchors', 'Home::anchors');
$routes->get('/anchors/anchors_detail', 'Home::anchorsdetail');

// Admin BTV
$routes->get('/admins','Admins::index');

$routes->post('api/domain','Api::domain');
$routes->post('api/domain/save','Api::domainsave');
$routes->delete('api/domain/(:num)','Api::domainDelete/$1');
$routes->post('api/channel','Api::channel');
$routes->post('api/channel/save','Api::channelsave');
$routes->delete('api/channel/(:num)','Api::channelDelete/$1');
$routes->post('api/type','Api::type');
$routes->post('api/type/save','Api::typesave');
$routes->delete('api/type/(:num)','Api::typeDelete/$1');
$routes->post('api/placement/save','Api::placementsave');
$routes->post('api/placements/(:any)','Api::placements/$1');
$routes->post('api/placement','Api::placement');
$routes->delete('api/placement/(:num)','Api::placementDelete/$1');
$routes->get('api/(:any)','Api::$1');

$routes->match(['get','post'],'login','Auth::login');
$routes->get('logout','Auth::logout');

// $routes->get('admins','Admins::index');
$routes->match(['get','post'],'admins/create','Admins::create');
$routes->match(['get','post'],'admins/edit/(:any)','Admins::edit/$1');
$routes->delete('admins/(:num)', 'Admins::delete/$1');

$routes->match(['get','post'],'profile','Profile::index');
$routes->match(['get','post'],'profile/security','Profile::security');
$routes->get('profile/delme','Profile::delMe');

$routes->get('domains','Domains::index');
$routes->get('channels','Channels::index');
$routes->get('types','Types::index');
$routes->get('placements/(:any)','Placements::index/$1');

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
