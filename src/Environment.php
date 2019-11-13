<?php

namespace Xtra\KoPackage;

use Symfony\Component\Dotenv\Dotenv;

class Environment{
    
    protected static $_instance;
    
    public static function instance(){
        if( !Environment::$_instance  instanceof Dotenv){
            
            $file_location = DOCROOT.'/.env';
            if( ! file_exists($file_location) ){
                http_response_code(500);
                die('environment not available');
            }
            $dotenv = new Dotenv();
            $dotenv->load(DOCROOT.'/.env');
            
            //Environment::$_instance = $dotenv;
        }
        return Environment::$_instance;
    }
    
}

if( !function_exists('env') ){
    function env($key){
        return Arr::get($_ENV, $key, NULL);
    }
}