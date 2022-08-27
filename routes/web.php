<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\UserController;

$router->get('/{name}/{age}[/{city}]','UserController@showData');