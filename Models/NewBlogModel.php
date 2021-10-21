<?php

namespace Models;

use Repositories\BlogRepository;

class NewBlogModel
{
    public $blogName;
    public $blog;

    public function __construct($blogName,$blog)
    {
        $this->blogName=$blogName;
        $this->blog = $blog;
    }

    public function dataPush()
    {

    }

}