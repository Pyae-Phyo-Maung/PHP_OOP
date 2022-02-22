
<?php
class Animal{
    public $animal;
    public function run(){
        echo "$this->animal is running";
    }

}

$dog=new Animal();
$dog->animal="Dog";
$dog->run();