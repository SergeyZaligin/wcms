<?php
require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';

new wcms\App();

//debug(wcms\App::$app->getProperties());

//throw new Exception('404', 404);