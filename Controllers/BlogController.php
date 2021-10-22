<?php

namespace Controllers;

use Repositories\BladeRender;
use Repositories\BlogRepository;
use Repositories\Request;

class BlogController
{
    public function blogController()
    {
        $request = new Request();
        $bladeRender = new BladeRender();
        $blogModel = BlogRepository::getById($request->id = "id");
        echo $bladeRender->render("blog",$blogModel->data);
    }
}