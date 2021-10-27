<?php

namespace Repositories;

class Request
{
    private $data = [];

    public function __get($value)
    {
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            $var = $_POST[$value] ?? $_GET[$value] ?? null;
        } else {
            $var = $_GET[$value] ?? null;
        }

         return $var ?? $_SERVER[$value] ?? null;
    }

    public function __set($name, $value)
    {
       return $this->data[$name] = $value;
    }
}