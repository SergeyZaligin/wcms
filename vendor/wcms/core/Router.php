<?php

namespace wcms;

/**
 * Router app
 *
 * @author Sergey
 */
class Router 
{
    /**
     * Table routes
     * 
     * @var array
     */
    protected static $routes = [];
    
    /**
     * Current route
     * 
     * @var array
     */
    protected static $route = [];
    
    /**
     * Add route
     * 
     * @param regexp $regexp
     * @param array $route
     */
    public static function add($regexp, $route = []) 
    {
        self::$routes[$regexp] = $route;
    }
    
    /**
     * Dispatch url,if matchRoute return true and run controller action
     * 
     * @param string $url
     */
    public static function dispatch($url) 
    {
        if (self::matchRoute($url)) {
            echo 'yes';
        } else {
            echo 'NO';
        }
    }
    /**
     * Find match url
     * 
     * @param string $url
     * @return bool
     */
    public static function matchRoute($url) 
    {
        return false;
    }
    
    public static function getRoutes() 
    {
        return self::$routes;
    }
    
    public static function getRoute() 
    {
        return self::$route;
    }
    
    
}
