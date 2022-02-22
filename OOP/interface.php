<?php
interface Animal{
    public function move();
    public function isFriendly();

}
class Dog implements Animal{
    public function move(){
        echo "The dog is moving";
    }
}