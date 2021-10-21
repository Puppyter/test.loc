<?php

namespace Models;


use Repositories\BlogRepository;

class IndexModel
{
    public $data = [];
    public function __construct($id)
    {
        $this->data = BlogRepository::getById($id);
    }

}