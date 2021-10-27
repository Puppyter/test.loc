<?php

namespace Repositories;

use Jenssegers\Blade\Blade;

class BladeRender
{
    public $inst = null;

    public function render($view, $data = null)
    {
        $blade = new Blade('./Views', './Cache');
        $blade->directive("routeByName", function ($name) {
            $router = new Router();
            foreach ($router->getRoutes() as $val) {
                if (in_array($name, $val)) {
                    return $val["route"];
                }
            }
            return null;
        });
        if ($this->inst === null) {
            if ($data === null) {
                return $this->inst = $blade->render($view);
            }
            return $this->inst = $blade->render($view, $data);
        }
        return null;
    }
}