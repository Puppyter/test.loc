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
        $blogsModels = BlogRepository::dataInPage($request->page);
        $currentPage = BlogRepository::getCurrentPage($request->page);
        $bladeRender = new BladeRender();
        echo $bladeRender->render('index', ["data" => $blogsModels->data, "currentPage" => $currentPage, "pages"=>BlogRepository::allPages()]);
    }
}