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

    // Gallery Management
    $routes->get('gallery', 'Gallery::index');
    $routes->post('gallery/save', 'Gallery::save');
    $routes->get('gallery/delete/(:num)', 'Gallery::delete/$1');

    // FAQ Management
    $routes->get('faq', 'Faq::index');
    $routes->post('faq/save', 'Faq::save');
    $routes->get('faq/delete/(:num)', 'Faq::delete/$1');

    // Activity Log (Superadmin only inside controller)
    $routes->get('activity-log', 'ActivityLog::index');

    // Admin Profile & Password Change
    $routes->get('profile', 'Profile::index');
    $routes->post('profile/update-password', 'Profile::updatePassword');
});

/*
 * --------------------------------------------------------------------
 * REST API Routes (For Frontend & External Clients)
 * --------------------------------------------------------------------
 */
$routes->group('api', ['namespace' => 'App\Controllers\Api'], static function ($routes) {
    // Unified Active Site Data Bundle (Cached vlc_be_active & vlc_be_active_backup)
    $routes->get('active', 'Active::index');

    // Programs
    $routes->get('programs', 'Programs::index');
    $routes->get('programs/(:any)', 'Programs::show/$1');

    // Galleries & FAQs
    $routes->get('galleries', 'Galleries::index');
    $routes->get('faqs', 'Faqs::index');

    // Authentication (Member)
    $routes->post('auth/login', 'Auth::login');
    $routes->post('auth/register', 'Auth::register');
    $routes->post('auth/verify', 'Auth::verify');
    $routes->post('auth/resend-verification', 'Auth::resendVerification');
    $routes->match(['get', 'post'], 'auth/check-email', 'Auth::checkEmail');

    // Member Profile
    $routes->get('profile/(:num)', 'Profile::show/$1');
    $routes->post('profile/(:num)', 'Profile::update/$1');

    // Enrollments
    $routes->post('enrollments', 'Enrollments::create');
    $routes->get('enrollments/member/(:num)', 'Enrollments::byMember/$1');
});

