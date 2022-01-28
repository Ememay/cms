<?php

use Core\Config;

session_start();

//define constans
define('PROOT',__DIR__);
define('DS',DIRECTORY_SEPARATOR);



include_once('core/Config.php');

$test = new Config;
echo $test->get('default_layout');