<?php
    class Animal{
        public $dog;
        public function __construct($dog){
            $this->dog=$dog;
            echo " is running..";
        }
    }

    $dname=new Animal("Dog");