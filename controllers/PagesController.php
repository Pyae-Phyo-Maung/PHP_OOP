<?php
namespace controller;
use core\App;
class PagesController{
    public function home(){
        $roles=App::get("query")->selectAll("roles");
        view('index',["manyrole"=>$roles]);
    }
    public function about(){
        view("about");
    }
    public function contact(){
        view("contact");
    }
    public function order(){
        view("order");
    }
    public function createRole(){
        App::get("query")->insert([
            "name"=>request('name'),
            "value"=>request('value'),
        ]
        ,"roles");
        redirect("/");
    }
}