<?php

use Router\Router;

$root = $_SERVER['DOCUMENT_ROOT'];
$host = $_SERVER['HTTP_HOST'];

define('HOST','http://'.$host.'/best/');
define('ROOT',$root.'/best');

define('CSS',HOST.'css/');
define('PLUGINS',HOST.'plugins/fontawesome/css/');
define('JS',HOST.'js/');
define('JA',dirname(__DIR__).DIRECTORY_SEPARATOR.'js'.DIRECTORY_SEPARATOR);

define('VIEWS',dirname(__DIR__).DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR);

define('SCRIPT',dirname($_SERVER['SCRIPT_NAME']).'/');


require('../vendor/autoload.php');

$routeur = new Router($_GET['url']);

$routeur->get('/home','App\Controllers\FitController@index');
$routeur->get('/error','App\Controllers\FitController@error');


$routeur->run();

?>