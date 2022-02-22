<?php 
 class Animal{
     static $dog="Mammal";
     static function group(){
         echo "Group".Animal::$dog;
     }
 }

 echo Animal::$dog;
 Animal::group();