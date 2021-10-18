<?php

namespace Repositories;

use Jenssegers\Blade\Blade;

class BladeRender
{
    public $inst = null;
  public function rend($view)
  {

      if ($this->inst === null)
      {
          $blade = new Blade('./Views', './Cache');
         return $this->inst = $blade->render($view);
      }
      return null;
  }
}