<?php
    abstract class Animal{
       public  abstract function run();
       public function bark(){
           echo "Woof.....Woof";
       }
    }
    class Dog extends Animal{
        public function run(){
            echo "This dog is running";
        }
    }
    $d=new Dog();
    $d->run();