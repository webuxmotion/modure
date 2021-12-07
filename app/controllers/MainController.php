<?php

namespace app\controllers;

use core\Tone;
use app\models\ContactMessage;

class MainController extends AppController {
    
    public function indexAction() {
    
       $this->setMeta(
           'Modure 3D Modeling Bureau',
           'Modure 3D Modeling Bureau',
           'Modure 3D Modeling Bureau'
       );
    }

    public function sendMessageAction() {
        if ($_POST) {
            $contactMessageModel = new ContactMessage();
            $contactMessageModel->load($_POST);
            if (!$contactMessageModel->validate()) {
                $contactMessageModel->getErrors();
            } else {
                if ($contactMessageModel->save()) {
                    $_SESSION['success'] = "Your message has been sent! Thank you.";
                }
            }
        }
        redirect('/#contacts');
    }
}