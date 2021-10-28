<?php

namespace Controllers;

use Repositories\BladeRender;
use Repositories\BlogRepository;
use Repositories\Request;

class IndexController
{
    public function index()
    {
        $request = new Request();
        $currentPage = BlogRepository::getCurrentPage($request->page);
        $blogsModels = BlogRepository::dataInPage($currentPage);
        $bladeRender = new BladeRender();
        echo $bladeRender->render('index', ["data" => $blogsModels->data, "currentPage" => $request->page, "pages"=>BlogRepository::allPages()]);
    }
}