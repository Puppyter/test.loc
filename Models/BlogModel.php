<?php

namespace Models;

class BlogModel
{
    public $data = [];

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
}