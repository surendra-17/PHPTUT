<?php
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ini_set('display_errors', 1);

/**
 * Key point of interfaces:
 * Interfaces can include abstract methods and constants, but cannot contain concrete methods and variables.
 * All the methods in the interface must be in the public visibility scope.
 * A class can implement more than one interface, while it can inherit from only one abstract class.
 * Interface can extend multiple interfaces but not extends classes
 * You can define constructor in interface
 * Cannot create object of interface using new keyword
 */

/**
 * Problem defination
 * Solving problem of changin classes every time for log from database to file or file to database using interfaces
 */

interface Logger{
    public function execute();
}


  class LogToFile implements Logger{

    public function execute(){
        echo 'log to file';
    }
 }

  class LogToDatabase implements Logger{
     public function execute(){
         echo 'log to databse';
     }
 }

 class User{
    protected $logger;
     public function __construct(Logger $logger)  //Here is the magic of interface
     {
         $this->logger = $logger;
     }

     public function run(){
         $this->logger->execute();
     }
 }

 $user = new User(new LogToDatabase); //you can swap implementation to LogToFile or LogToDatabse
 $user1 = new User(new LogToFile);
 $user->run();
 $user1->run();
