<?php

namespace Controllers;

use Repositories\BladeRender;

class NotFoundController
{
    public function notFound()
    {
        $bladeRender = new BladeRender();
        echo $bladeRender->render('404');
    }
}