<?php

namespace Controllers;

use Repositories\BladeRender;
use Repositories\BlogRepository;
use Repositories\Request;

class NewBlogController
{
    public function newBlog()
    {
        $request = new Request();
        $bladeRender = new BladeRender();
        echo $bladeRender->render('newBlog');
        if ($request->blogName != null && $request->blog != null) {
            BlogRepository::putInDataBase($request->blogName, $request->blog);
        }
    }
}