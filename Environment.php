<?php

namespace Xtra\KoPackage\Environment;

use Xtra\KoPackage\Environment\Exception\PathException;
use Symfony\Component\Dotenv\Dotenv;


class Environment {

    protected $filename = '.env';
    protected $directory;

    public function register($directory)
    {
        $this->set_directory($directory);
        
        $location = $this->get_location();
        if ( !is_readable($location) || is_dir($location)) {
            throw new LocationException($location);
        }
        
        $dotenv = new Dotenv();
        $dotenv->load($location);
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
    
    protected function get_location() : string
    {
        $directory = rtrim($this->directory, '/');
        $filename = ltrim($this->filename, '/');
        
        return $directory . '/' . $filename;
    }
    
}
