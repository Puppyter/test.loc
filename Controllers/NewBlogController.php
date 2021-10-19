<?php

namespace Controllers;

use Models\NewBlogModel;
use Repositories\BladeRender;
use Repositories\Request;

class NewBlogController
{
    public function newBlog()
    {
        $req = new Request();
        $req->blog = "blog";
        $req->blogname = "blogname";
        $bm = new NewBlogModel();
        $array = ["blogname"=>$req->blogname, "blog"=>$req->blog];
        $bm->blogPost($array);
        $br = new BladeRender();
        echo $br->render('newBlog');
    }
}