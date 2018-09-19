<?php

namespace wcms;

/**
 * Main class application App
 *
 * @author Sergey
 */
class App 
{
    /**
     * Container (class Registry) for property app
     * 
     * @var object Registry
     */
    public static $app;
    
    public function __construct() 
    {
        // Get query string
        $query = trim($_SERVER['QUERY_STRING'], '/');
        // Start session
        session_start();
        // Reestr
        self::$app = Registry::instance();
        
        $this->getParams();
    }
    
    /**
     * Method getParams write property in $app
     * 
     * @return void
     */
    protected function getParams() 
    {
        $params = require_once CONF . '/params.php';
        if (!empty($params)) {
            foreach ($params as $key => $value) {
                self::$app->setProperty($key, $value);
            }
        }
    }

}
