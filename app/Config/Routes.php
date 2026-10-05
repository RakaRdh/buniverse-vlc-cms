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
$routes->setDefaultController('Dashboard');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// Auth routes (Public)
$routes->get('/', 'Dashboard::index', ['filter' => 'adminauth']);
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::attemptLogin');
$routes->get('/logout', 'Auth::logout');

// Protected CMS routes
$routes->group('', ['filter' => 'adminauth'], static function ($routes) {
    // Dashboard
    $routes->get('dashboard', 'Dashboard::index');

    // Programs
    $routes->get('programs', 'Programs::index');
    $routes->get('programs/new', 'Programs::new');
    $routes->post('programs/create', 'Programs::create');
    $routes->get('programs/edit/(:num)', 'Programs::edit/$1');
    $routes->post('programs/update/(:num)', 'Programs::update/$1');
    $routes->get('programs/delete/(:num)', 'Programs::delete/$1');
    $routes->post('programs/add-module/(:num)', 'Programs::addModule/$1');
    $routes->get('programs/delete-module/(:num)', 'Programs::deleteModule/$1');

    // Enrollments
    $routes->get('enrollments', 'Enrollments::index');
    $routes->post('enrollments/update-status/(:num)', 'Enrollments::updateStatus/$1');

    // Members
    $routes->get('members', 'Members::index');
    $routes->get('members/detail/(:num)', 'Members::detail/$1');

    // Activity Log (Superadmin only inside controller)
    $routes->get('activity-log', 'ActivityLog::index');

    // Admin Profile & Password Change
    $routes->get('profile', 'Profile::index');
    $routes->post('profile/update-password', 'Profile::updatePassword');
});
