<?php

namespace app\controllers;

use core\Tone;

class MainController extends AppController {
    
    public function indexAction() {
    
       $this->setMeta(
           'Modure 3D Modeling Boutique',
           'Modure 3D Modeling Boutique',
           'Modure 3D Modeling Boutique'
       );
    }
}