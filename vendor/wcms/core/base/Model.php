<?php

namespace wcms\base;

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
        
    }

}
