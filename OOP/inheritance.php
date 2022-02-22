<?php
class Animal
{
    private $name;
 public function __construct($name)
 {
    $this->name=$name;
 }
 public function run()
 {
 echo "$this->name is running...";
 }
}
class Dog extends Animal{
    public function bark(){
        echo "The dog is barking";
    }
}
$dog = new Dog("Rambo");
$dog->run();