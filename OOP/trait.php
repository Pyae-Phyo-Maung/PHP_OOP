<?php
trait Math{
    //adding two number
    // $a @param {a : int}
    // $a @param {a : int}
    // no return
    public function add($a,$b){
        echo $a+$b;
    }
}
trait Area{
    private $PI=4.13;
    public function cricle($r){
        echo $this->PI*$r*$r;
    }
}
class Calculator{
    use Math,Area;
}
$cal=new Calculator();
$cal->add(1,2);
$cal->cricle(4);