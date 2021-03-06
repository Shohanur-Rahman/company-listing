<?php
namespace App\Classes\Config;

class  Config{
    public  static function get($path =  null){
        if($path){
            $config = $GLOBALS['config'];
            $path = explode('/',$path);

            foreach ($path as $bit){
                if(isset($bit)){
                    $config = $config[$bit];
                }
            }

            return $config;
        }
        return false;
    }
}