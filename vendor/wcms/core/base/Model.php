<?php

namespace wcms\base;

use wcms\Db;

/**
 * Description of Model
 *
 * @author Sergey
 */
abstract class Model 
{
    public $attributes = [];
    public $errors = [];
    public $rules = [];
    
    public function __construct() 
    {
        Db::instance();
    }

}
