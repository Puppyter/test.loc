<?php

namespace Controllers;

use Repositories\BlogRepository;
use Repositories\Request;
use Repositories\BladeRender;

class EditBlogController
{
    public function editBlog()
    {
      $request =new Request();
      $bladeRender = new BladeRender();
      $blogModel = BlogRepository::getById($request->id);
      echo $bladeRender->render("editBlog",$blogModel->data);
    }
}