<?php

namespace Controllers;

use Models\BlogModel;
use Repositories\BladeRender;
use Repositories\Request;

class BlogController
{
    public function blogController()
    {
        $request = new Request();
        $bladeRender = new BladeRender();
        $blogModel = new BlogModel($request->id ="id");
        $data = $blogModel->data;
        echo $bladeRender->render("blog",$data);
    }
}