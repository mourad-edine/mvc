<?php

use Router\Router;


require('../vendor/autoload.php');

$routeur = new Router($_GET['url']);
$routeur->get('/home','App\Controllers\BlogController@index');
$routeur->get('/post/:id','App\Controllers\BlogController@show');
$routeur->get('/conta/:id','App\Controllers\BlogController@contact');
$routeur->run();

?>