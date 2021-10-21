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
        $blogModel = new NewBlogModel($request->blogName = "blogName", $request->blog = "blog");
        BlogRepository::putInDataBase(BlogRepository::arrayBuilder($this->blogName,$this->blog));
        $bladeRender = new BladeRender();
        echo $bladeRender->render('newBlog');
    }
}