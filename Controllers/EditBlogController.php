<?php

namespace Controllers;

use Repositories\BlogRepository;
use Repositories\Request;
use Models\EditBlogModel;
use Repositories\BladeRender;

class EditBlogController
{
    public function editBlog()
    {
      $request =new Request();
      $bladeRender = new BladeRender();
      $editBlogModel = new EditBlogModel(BlogRepository::getById($request->id = "id"));
      BlogRepository::putInDataBase(BlogRepository::arrayBuilder($editBlogModel->data["blogName"],$editBlogModel->data["blog"], $editBlogModel->data["id"]));
      echo $bladeRender->render("editBlog",$editBlogModel->data);

    }
}