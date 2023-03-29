<?php

//Pascal Casing - MyName
//Camel Casing - myName


//public, private, protected, default

//Parent Class
class Person {
    //instance variables
    public $firstName;
    public $middleName;
    public $lastName;
    public $age;

                                //these parameters accept values
    public function __construct($firstName, $middleName, $lastName, $age){
        //$this is used to target the instance variables of the class
        $this->firstName = $firstName;
        $this->middleName = $middleName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function printName(){
        return "Your name is $this->lastName $this->firstName $this->middleName $this->age";
    }

}

//Child Class
class Student extends Person{
    public function printName(){
        return "Your friend's name is $this->lastName $this->firstName $this->middleName $this->age";
    }
}

//Child Class
class Classmate extends Person{
    public function printName(){
        return "Your classmate's name is $this->lastName $this->firstName $this->middleName $this->age";
    }
}

$mySelf = new Person("Jayson", "Lanz" , "Polentinos", 70);

$friend = new Student("Keanu", "Christian" , "Ralf", 80);

$classmate = new Classmate("Aj", "Kate" , "Lowie", 80);