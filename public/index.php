<?php

use Router\Routes;

require_once realpath("../vendor/autoload.php");

$route = new Routes($_GET['url']);

$route->get('/', 'App\controllers\siteWebController@accueil');
$route->get('/accueil', 'App\controllers\siteWebController@accueil');
$route->get('/test', 'App\controllers\siteWebController@test');
$route->get('/test/:id', 'App\controllers\siteWebController@idTest');

$route->run();