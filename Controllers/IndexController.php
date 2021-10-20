<?php

namespace Controllers;

use Models\IndexModel;
use Repositories\BladeRender;
use Repositories\Request;

class IndexController
{
    public function index()
    {
        $indexModel = new IndexModel();
        $data = $indexModel->getCsv();
        $bladeRender = new BladeRender();
        echo $bladeRender->render('index', $data);
    }
}