<?php

use Core\Config;
use Core\ss;

session_start();

//define constans
define('PROOT', __DIR__);
define('DS', DIRECTORY_SEPARATOR);



//autoloader
spl_autoload_register('myautoloader');
function myautoloader($className)
{

    $parts = explode('\\' , $className);
    $class = end($parts);
    array_pop($parts);
    $path = strtolower(implode(DS,$parts));
    $path = PROOT . DS . $path . DS . $class . '.php';
    if(file_exists($path)){
        include($path);
    }
}




echo Config::get('db_name');