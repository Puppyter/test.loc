<?php

namespace Controllers;

use Repositories\BladeRender;
use Repositories\BlogRepository;

class IndexController
{
    public function index()
    {

        $blogsModels = BlogRepository::blogPages();

        $bladeRender = new BladeRender();
        echo $bladeRender->render('index', ["data" => $blogsModels->data]);
    }
}