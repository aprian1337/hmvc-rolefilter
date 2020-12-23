<?php

$routes->get('/', '\Modules\main\Controllers\mainController::index');
$routes->post('auth/login', '\Modules\main\Controllers\mainController::cekLogin');
