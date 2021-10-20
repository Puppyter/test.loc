<?php

namespace Controllers;

use Models\EditBlogModel;
use Repositories\BladeRender;
use Repositories\Request;

class EditBlogController
{
    public function editBlog()
    {
      $request =new Request();
      $bladeRender = new BladeRender();
      $editBlogModel = new EditBlogModel();
      $request->id ="id";
      $id =$request->id;
      $data = $editBlogModel->getCsv($id);
      echo $bladeRender->render("editBlog",$data);
    }
}