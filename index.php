<?php
require './vendor/autoload.php';
use Repositories\Router;

$rt = new Router();
$rt->handlingUrl("/blog");