<?php

use Emblaze\Bootstrap\App;

class Application {
    /**
     * Application constructor
     * 
     */
    private function __construct() {}
    
    /**
     * Run the application
     * 
     * @return void
     */
    public static function run()
    {
        /**
         * Define root path
         */
        define('ROOT', realpath(__DIR__.'/..'));
        // dump(ROOT); //-> e.g. "/Users/reymarkdivino/Desktop/PHP-MVC/Emblaze"
        
        /**
         * Define separator
         */
        define('DS', DIRECTORY_SEPARATOR);
        // dump(ROOT); //-> e.g. "/"
        
        /**
         * Run the application
         */
        App::run();
    }
}