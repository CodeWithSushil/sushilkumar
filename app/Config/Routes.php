<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'HomeController::index');
$routes->get('/home', 'HomeController::index');
$routes->get('/about', 'AboutController::Index');
$routes->get('/services', 'ServicesController::Index');
$routes->get('/contact', 'ContactController::Index');
$routes->get('/blog', 'BlogController::Index');
