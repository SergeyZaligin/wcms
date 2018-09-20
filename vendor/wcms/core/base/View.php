<?php

namespace wcms\base;

/**
 * Base class View on core
 *
 * @author Sergey
 */
abstract class View 
{
    /**
     * Array routes
     * 
     * @var array
     */
    public $route;
    /**
     * Controller name
     * 
     * @var string
     */
    public $controller;
    /**
     * Model name
     * 
     * @var string 
     */
    public $model;
    /**
     * View name
     * 
     * @var string
     */
    public $view;
    /**
     * Prefix name
     * 
     * @var string
     */
    public $prefix;
    /**
     * Data
     * 
     * @var array
     */
    public $data = [];
    /**
     * Meta info
     * 
     * @var array
     */
    public $meta = [];
    
    /**
     * Constructor view
     * 
     * @param array $route
     */
    public function __construct($route, $layout = '', $view = '', $meta) 
    {
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->model = $route['controller'];
        $this->view = $view;
        $this->prefix = $route['prefix'];
        $this->meta = $meta;
        if (false === $layout) {
            $this->layout = false;
        } else {
            $this->layout = $layout ?: LAYOUT;
        }
    }

}
