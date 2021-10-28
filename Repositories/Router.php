<?php

namespace Repositories;

use Controllers\AuthorizationController;
use Controllers\BlogController;
use Controllers\EditBlogController;
use Controllers\IndexController;
use Controllers\NewBlogController;
use Controllers\NewUserController;
use Controllers\NotFoundController;
use Controllers\UserController;

class Router
{
    private $defController = [NotFoundController::class, 'notFound'];
    private $routes = [
        [
            "name" => "index",
            "route" => "/",
            "controller" => [IndexController::class, 'index']
        ],
        [
            "name" => "blogNew",
            "route" => "/blog/new",
            "controller" => [NewBlogController::class, 'newBlog']
        ],
        [
            "name" => "blog",
            "route" => "/blog",
            "controller" => [BlogController::class, 'blogController']
        ],
        [
            "name" => "blogEdit",
            "route" => "/blog/edit",
            "controller" => [EditBlogController::class, 'editBlog']
        ],
        [
            "name" => "registration",
            "route" => "/user/new",
            "controller" => [NewUserController::class, 'newUser']
        ],
        [
            "name" => "user",
            "route" => "/user",
            "controller" => [UserController::class, 'user']
        ],
        [
            "name" => "authorization",
            "route"=>"/user/login",
            "controller" => [AuthorizationController::class, 'authorization']
        ]
    ];

    public function handlingUrl($url)
    {
        $this->callController($this->urlCleaner($url));
    }
    public function getRoutes()
    {
        return $this->routes;
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

    private function urlCleaner($url): string
    {
        $url = array_filter(explode('/', parse_url($url, PHP_URL_PATH)));
        if (empty($url)) {
            return '/';
        }
        return "/" . implode('/', $url);
    }
}