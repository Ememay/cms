<?php
namespace Core;

class Config {

    private static $config = [

        'version'               => '0.0.1',
        'root_dir'              => 'cms', // this will likely / in live server
        'default_controller'    => 'blog', // the default home controller
        'default_layout'        => 'default', // defualt layout that is used
        'default_site_title'    => 'myCMS', // defualt site title
        'db_host'               => '127.0.0.1', // DB dost, better to be ip
        'db_name'               => 'cms', // DB name
        'db_user'               => 'root', // DN username
        'db_password'           => '', // DB password
        'login_cookie_name'     =>'4fewf234234ffrfw' // Login cookie name

    ];


    public static function get($key) {
        return array_key_exists($key , self::$config) ? self::$config[$key] : NULL;
    }

}