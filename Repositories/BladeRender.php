<?php

namespace Repositories;

use Jenssegers\Blade\Blade;

class BladeRender
{
    public $inst = null;

    public function render($view, $data)
    {
        if ($this->inst === null) {
            $blade = new Blade('./Views', './Cache');
            if ($data === null) {
                return $this->inst = $blade->render($view);
            }
            return $this->inst = $blade->render($view, $data);
        }
        return null;
    }
}