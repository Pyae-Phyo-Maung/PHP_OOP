<?php

 function dd($name){
     echo "<pre>";
    die(var_dump($name));
}
function view($names,$data=[]){
    extract($data);
    return require("views/$names.view.php");
}
function redirect($uri){
    header("location: $uri");
}
function request($name){
   
    if($_SERVER['REQUEST_METHOD']==='POST'){
        return $_POST[$name];
    }elseif($_SERVER['REQUEST_METHOD']==='GET'){
        return $_GET[$name];
    }
}