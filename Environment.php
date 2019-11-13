<?php

namespace Xtra\KoPackage\Environment;

use Symfony\Component\Dotenv\Dotenv;

class Environment {

    protected $filename = '.env';
    protected $directory;

    public function register($directory){
        
        $this->set_directory($directory);
        $this->format_location();
        
        if( ! file_exists($location) ){
            die('bestaat ni');
        } elseif( !is_readable($location) ){
            die('niet leesbaar');
        }
        
        $dotenv = new Dotenv();
        $dotenv->load(DOCROOT . '/.env');
    }
    
    public function set_directory(string $directory) : self
    {
        $this->directory = $directory;
        return $this;
    }
    
    public function set_filename(string $filename) : self 
    {
        $this->filename = $filename;
        return $this;
    }
    
    protected function format_location(){

        $directory = rtrim($this->directory, '/');
        $filename = ltrim($this->filename, '/');
        
        $this->location = $directory . '/' . $filename;
        
        return $this;
    }
    
}
