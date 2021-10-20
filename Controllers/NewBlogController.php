<?php

namespace Controllers;

use Models\NewBlogModel;
use Repositories\BladeRender;
use Repositories\Request;

class NewBlogController
{
    public function newBlog()
    {
        $request = new Request();
        $request->blog = "blog";
        $request->blogname = "blogname";
        $blogModel = new NewBlogModel();
        $array = ["blogname"=>$request->blogname, "blog"=>$request->blog];
        $blogModel->blogPost($array);
        $bladeRender = new BladeRender();
        echo $bladeRender->render('newBlog');
    }
}