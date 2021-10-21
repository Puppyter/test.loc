<?php

namespace Models;


use Repositories\BlogRepository;

class EditBlogModel
{
    public $data=[];
    public function __construct($data)
    {
        $this->data = $data;
    }
    public function __get($name)
    {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
        return null;
    }

    public function pushData()
    {

    }
}