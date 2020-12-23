<?php

$routes->get('admin', '\Modules\admin\Controllers\adminController::index');
$routes->get('auth/logout', '\Modules\main\Controllers\mainController::logout');