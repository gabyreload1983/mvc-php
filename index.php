<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));

// load config and helper functions
require_once(ROOT . DS . 'config' . DS . 'config.php');
require_once(ROOT . DS . 'app' . DS . 'lib' . DS . 'helpers' . DS . 'functions.php');

// Autoload classes
function autoload($className) {
    $searchPaths = [
        ROOT . DS . "core" . DS . $className . ".php",
        ROOT . DS . "app" . DS . "controllers" . DS . $className . ".php",
        ROOT . DS . "app" . DS . "views" . DS . $className . ".php",
        ROOT . DS . "app" . DS . "models" . DS . $className . ".php"
    ];

    foreach($searchPaths as $i)
        if(file_exists($i))
            require_once($i);
}

spl_autoload_register('autoload');
session_start();

$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : [];

// Route the request
Router::route($url);