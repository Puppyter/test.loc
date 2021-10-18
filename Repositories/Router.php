<?php

namespace Repositories;

use Controllers\IndexController;
use Controllers\NotFoundController;

class Router
{
    private $defController = [NotFoundController::class, 'notFound'];
    private $routes = [
        [
            "name" => "index",
            "route" => "/",
            "controller" => [IndexController::class, 'index']
        ]
    ];

    public function handlingUrl($url)
    {
        $this->callController($this->urlCleaner($url));
    }

    private function urlCleaner($url): string
    {
        $url = array_filter(explode('/', parse_url($url, PHP_URL_PATH)));
        if (empty($url)) {
            return '/';
        }
        return "/" . implode('/', $url);
    }

    private function callController($url): void
    {
        $controller = $this->defController;
        $routes = $this->routes;
        foreach ($routes as $val) {
            if (in_array($url, $val)) {
                $controller = array_replace($controller, $val['controller']);
                break;
            }
        }
        call_user_func($controller);
    }
}