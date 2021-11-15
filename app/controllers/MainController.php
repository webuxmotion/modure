<?php

namespace app\controllers;

use core\Tone;

class MainController extends AppController {
    
    public function indexAction() {
    
       $this->setMeta(
           'Modure 3D Modeling Bureau',
           'Modure 3D Modeling Bureau',
           'Modure 3D Modeling Bureau'
       );
    }
}