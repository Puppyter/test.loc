<?php

namespace Repositories;

class Request
{
    private $data = [];

    public function __get($val)
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            return $this->data[$_GET[$val]];
        } elseif ($_SERVER['REQUEST_METHOD'] == "POST") {
            return $this->data[$_POST[$val]];
        }
        return null;
    }

}