<?php

use Router\Router;

define('VIEWS',dirname(__DIR__).DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR);
define('SCRIPT',dirname($_SERVER['SCRIPT_NAME']).DIRECTORY_SEPARATOR);



require('../vendor/autoload.php');

$routeur = new Router($_GET['url']);
$routeur->get('/home','App\Controllers\BlogController@index');
$routeur->get('/post/:id','App\Controllers\BlogController@show');
$routeur->get('/conta/:id','App\Controllers\BlogController@contact');
$routeur->run();

?>