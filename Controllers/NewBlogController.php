<?php

namespace Controllers;

use Models\NewBlogModel;
use Repositories\BladeRender;
use Repositories\BlogRepository;
use Repositories\Request;

class NewBlogController
{
    public function newBlog()
    {
        $request = new Request();
        $bladeRender = new BladeRender();
        BlogRepository::putInDataBase(["blogName" =>$request->blogName='blogName', "blog"=>$request->blog='blog']);
        echo $bladeRender->render('newBlog');
    }
}