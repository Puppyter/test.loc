<?php

namespace Controllers;

use Repositories\BladeRender;
use Repositories\Request;

class IndexController
{
    public function index()
    {
        $br = new BladeRender();
        echo $br->render('index');
    }
}