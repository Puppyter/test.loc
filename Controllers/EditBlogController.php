<?php

namespace Controllers;

use Models\EditBlogModel;
use Repositories\BladeRender;
use Repositories\Request;

class EditBlogController
{
    public function blog()
    {
        $br = new BladeRender();
        echo $br->rend('blog');
        $req = new Request();
        $req->blog = "blog";
        $req->blogname = "blogname";
        $bm = new EditBlogModel();
        $bm->blogPost(array($req->blogname,$req->blog));
    }
}