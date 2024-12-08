<?php

namespace Core;
class Config {
    private static $config = [
        'version'              => '0.0.1',
        "root_dir"             => '/cms/cms/',
        'default_controler'    => 'Blog',
        'default_layout'       => 'default',
        'default_site_title'   => 'Jeylani Site',
        'db_host'              => '127.0.0.1',
        'db_user'              => 'admin',
        'db_password'          => 'mansojey56',
        'db_name'              => 'cms2',
        'login_cookie_name'    => 'madf34343tioyq'
    ];
    public static function get($key) {
      return array_key_exists($key, self::$config)? self::$config[$key] : null;
    }

}

    
