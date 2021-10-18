<?php

namespace Repositories;

class Request
{
    private $data = [];

    public function __get($name)
    {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
        return null;
    }

    public function __set($name,$value)
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $this->data[$name] = $_GET[$value];
        } elseif ($_SERVER['REQUEST_METHOD'] == "POST") {
            $this->data[$name] = $_POST[$value];
        }
        return null;
    }
}