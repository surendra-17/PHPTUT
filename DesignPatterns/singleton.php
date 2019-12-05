<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
class Test{

    private static $instance = null;

    private function __construct(){
        echo 'Test class instance created';
    }

    public static function getInstance(){
        
        if(empty(self::$instance)){
            self::$instance = new self;
            return self::$instance;
        }else{
            return self::$instance;
        }
    }

    /**
     * Make clone magic method private, so nobody can clone instance.
     */
    private function __clone(){
      
    }

    /**
     * Make wakeup magic method private, so nobody can unserialize instance.
     */
    private function __wakeup(){

    }

    /**
     * Make sleep magic method private, so nobody can serialize instance.
     */
    private function __sleep(){

    }
}

$test = Test::getInstance();