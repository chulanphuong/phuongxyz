<?php

namespace Phuon\LamBaiThi\Commons;

use eftec\bladeone\BladeOne;

class Controller{
    public function renderView($view, $data =[]){
        $templatePath = __DIR__ . '/../Views';
        $compiledPath = __DIR__ . '/../Views/cache';
        $blade = new BladeOne($templatePath,$compiledPath); 
        echo $blade->run($view,$data);
    }
}