<?php
if( !function_exists('env') ){
    function env($key){
        return Arr::get($_ENV, $key, NULL);
    }
}