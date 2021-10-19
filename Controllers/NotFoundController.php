<?php

namespace Controllers;

use Repositories\BladeRender;
use Repositories\Request;

class NotFoundController
{
    public function notFound()
    {
        $br = new BladeRender();
        echo $br->render('404');
    }
}