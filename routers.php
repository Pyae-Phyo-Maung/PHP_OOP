<?php
    // $routers->register([
    //     ""=>"controllers/IndexController.php",
    //     "about"=>"controllers/AboutController.php",
    //     "contact"=>"controllers/ContactController.php",
    //     "order"=>"controllers/OrderController.php",
    //     "names"=>"controllers/NameController.php",
    //  ] );
    
    //  $routers->get("about","controllers/AboutController.php");
    //  $routers->get("contact","controllers/ContactController.php");
    //  $routers->get("order","controllers/OrderController.php");
    //  $routers->post("names","controllers/NameController.php");

//Laravel 7
    //  $routers->get("","PagesController@home");
    //  $routers->get("about","PagesController@about");
    //  $routers->get("contact","PagesController@contact");
    //  $routers->get("order","PagesController@order");
    //  $routers->post("names","PagesController@createRole");

//Laravel 8
        use controller\PagesController;
        $routers->get('',[PagesController::class,'home']);
        $routers->get('about',[PagesController::class,'about']);
        $routers->get('contact',[PagesController::class,'contact']);
        $routers->get('order',[PagesController::class,'order']);
        $routers->post("names",[PagesController::class,"createRole"]);
