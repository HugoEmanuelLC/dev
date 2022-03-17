<?php

use Router\Routes;

require_once realpath("../vendor/autoload.php");

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);

$route = new Routes($_GET['url']);

//site web
$route->get('/', 'App\controllers\siteWebController@accueil');
$route->get('/accueil', 'App\controllers\siteWebController@accueil');
$route->get('/test', 'App\controllers\siteWebController@test');
$route->get('/test/:id', 'App\controllers\siteWebController@idTest');

//panel de configuration
$route->get('my-panel-log', '\App\controllers\PanelController@panelLog');
$route->post('my-panel', '\App\controllers\PanelController@authentification');

$route->get('my-panel', '\App\controllers\PanelController@homePanel');
$route->get('test-panel', '\App\controllers\PanelController@test');
$route->get('deconnecte', '\App\controllers\PanelController@deconnect');

$route->run();