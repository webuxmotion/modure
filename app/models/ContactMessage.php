<?php

namespace app\models;

use core\base\Model;

class ContactMessage extends Model {

    protected $table = 'contact_message';
    
    public $attributes = [
        'email' => '',
        'name' => '',
        'message' => '',
    ];

    public $rules = [
        'required' => [
            ['email'],
            ['name'],
            ['message']
        ],
        'email' => [
            ['email'],
        ],
    ];
}