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
        if ($request->edit !== null)
        {
            if (BlogRepository::editBlog([$request->edit, $request->blogName, $request->blog])==true)
            {
                $editBlog=true;
            }
            $editBlog=false;
        }
        elseif ($request->delete !==null)
        {
            if (BlogRepository::deleteById($request->delete) == true)
            {
                $deleteBlog = true;
            }
            $deleteBlog = false;
        }
      echo $bladeRender->render("editBlog",["data"=>$blogModel->data, "editBlog"=>$editBlog, "deleteBlog"=>$deleteBlog]);

    }
}