<?php

namespace Models;

use Repositories\BlogRepository;

class BlogModel
{
    public $data = [];

    public function __construct($id)
    {
       $this->data = BlogRepository::getById($id);
    }

    public function __get($name)
    {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
        return null;
    }
}