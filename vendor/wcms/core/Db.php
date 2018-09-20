<?php

namespace wcms;

/**
 * Description of Db
 *
 * @author Sergey
 */
class Db 
{
    use TSingletone;
    
    protected function __construct() {
        $db = require_once CONF . '/config_db.php';
    }
}
