<?php

use Illuminate\Routing\Router;

/** @var Router $router */
if (! App::runningInConsole()) {
    $router->get('/pages/{uri}', ['uses' => 'PublicController@uri', 'as' => 'page']);
}
