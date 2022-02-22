<?php
   
class Dave {

    private $partner;



    public function __construct() {
        $this->partner = new Kate;



    }



    public function date() {

        $this->partner->takeOut();

    }

}

$dave = new Dave();

$dave->date();
