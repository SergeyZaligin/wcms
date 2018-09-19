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
                    echo $controller = 'app\controllers\\' . self::$route['prefix'] 
                            . self::$route['controller'] . 'Controller';
        } else {
            throw new \Exception('Страница не найдена', 404);
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
        // iteration on table routes
        foreach (self::$routes as $pattern => $route) {
            // find coincidence $pattern with $url and if true write value in $matches
            if (preg_match("#$pattern#", $url, $matches)) {
                // rebuild array $match in string key (except int) 
                foreach ($matches as $key => $value) {
                    if (is_string($key)) {
                        $route[$key] = $value; 
                    }
                }
                if (empty($route['action'])) {
                    $route['action'] = 'index';
                }
                if (!isset($route['prefix'])) {
                    $route['prefix'] = '';
                } else {
                    $route['prefix'] .= '\\';
                }
                self::$route = $route;
                debug(self::$route);
                return true;
            }
        }
        
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
