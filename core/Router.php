<?php
class Router{
        protected $routers=[
            "GET"=>[

            ],
            "POST"=>[

            ]
        ];
        public static function load($filename){
            $routers=new Router();
            include "$filename";
            return $routers;
        }

        // public function register($routers){
        //     $this->routers=$routers;
        // }
        public function get($uri,$controller){
            return $this->routers["GET"][$uri]=$controller;
        }
        public function post($uri,$controller){
            return $this->routers["POST"][$uri]=$controller;
        }
        public function direct($uri,$method){
            
            if(!array_key_exists($uri,$this->routers[$method])){
                die("404page");
            } 
           // $explosion = explode("@",$this->routers[$method][$uri]);
           $explosion=$this->routers[$method][$uri];
          // dd($explosion);
            $this->callMethod($explosion[0],$explosion[1]);
        }
        public function callMethod($class,$method){
            $class=new $class;
            $class->$method();
        }
    }