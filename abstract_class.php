<?php

ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ini_set('display_errors', 1);


/**
 * An abstract method can not contain body: Methods defined as abstract simply declare the method's signature - they cannot define the implementation. But a non-abstract method can define the implementation.
 * 
 * Can not instantiate abstract class: Classes defined as abstract may not be instantiated, and any class that contains at least one abstract method must also be abstract.
 * 
 *  Any class that contains at least one abstract method must also be abstract: Abstract class can have abstract and non-abstract methods, but it must contain at least one abstract method. If a class has at least one abstract method, then the class must be declared abstract.
 * 
 * Abstract class doesn't support multiple inheritance:Abstract class can extends another abstract class,Abstract class can provide the implementation of interface.But it doesn't support multiple inheritance.
 * 
 * Signatures of the abstract methods must match:When inheriting from an abstract class, all methods marked abstract in the parent's class declaration must be defined by the child;the signatures of the methods must match, i.e. the type hints and the number of required arguments must be the same. For example, if the child class defines an optional argument, where the abstract method's signature does not, there is no conflict in the signature.
 * 
 * Same (or a less restricted) visibility:When inheriting from an abstract class, all methods marked abstract in the parent's class declaration must be defined by the child; additionally, these methods must be defined with the same (or a less restricted) visibility. For example, if the abstract method is defined as protected, the function implementation must be defined as either protected or public, but not private.
 * 
 * When inheriting from an abstract class, all methods marked abstract in the parent's class declaration must be defined by the child :If you inherit an abstract class you have to provide implementations to all the abstract methods in it.
 * 
 * Abstract Class
 * 1. Contains an abstract method
 * 2. Cannot be directly initialized
 * 3. Cannot create an object of abstract class
 * 4. Only used for inheritance purposes

 * Abstract Method
 * 1. Cannot contain a body
 * 2. Cannot be defined as private
 * 3. Child classes must define the methods declared in abstract class
 */

 /**
  * Problem Defination
  * Solving the problem of code duplication in classes Tea and Coffee using abstract class Template
  */
abstract class Template{

    public function make(){
        $this->addHotWater()
             ->addSugar()
             ->addPrimaryToppings()
             ->addMilk();
    }

    protected  function  addHotWater()
    {
        var_dump('Pour Hot water into cup');
        return $this;
    }

    protected  function addSugar()
    {
        var_dump('Add proper amount of sugar');
        return $this;
    }

    protected function addMilk()
    {
        var_dump('Add proper amount of Milk');
        return $this;
    }

    protected abstract function addPrimaryToppings();
}

class Tea extends Template{

    public function addPrimaryToppings()
    {
        var_dump('Add proper amount of tea');
        return $this;
    }
}

echo "<pre>";
$tea = new Tea();
$tea->make();

class Coffee extends Template
{
    public function addPrimaryToppings()
    {
        var_dump('Add proper amount of Coffee');
        return $this;
    }
}

$coffee = new Coffee();
$coffee->make();