<?php
    include "vendor/autoload.php";
    include ("core/bootstrap.php");
   
Router::load("routers.php")->direct(Request::uri(),$_SERVER['REQUEST_METHOD']);
