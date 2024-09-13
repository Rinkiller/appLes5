<?php

namespace Geekbrains\Application1\Controllers;
use Geekbrains\Application1\Render;

class HendlerController {

    public function actionIndex() {
        $render = new Render();
                return $render->renderPage('hendlerError404.tpl', ['title'=>'Server error']);
    }
}