<?php
//phpinfo();
require './vendor/autoload.php';

 function dd(...$var)
{
    var_dump($var);
    die;
}
use \Repositories\Request;
use Repositories\Router;
$request = new Request();
$router = new Router();
$router->handlingUrl($request->REQUEST_URI);
