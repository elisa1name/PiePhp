<?php

namespace Core;

use Controller\AppController;
use Core\Router;

class Core {
    public function run() {
        //echo __CLASS__ . " [OK]" . PHP_EOL; 
        $chaine = str_replace ( BASE_URI . "/" , "", $_SERVER["REQUEST_URI"]);
        //contient user et add
        $separator = explode("/", $chaine);
        //separator separe mon controller et mon action
        require_once ('routes.php');
        Router::get($chaine);
       
        if(empty($separator[0]) && empty($separator[1])){
            $separator[0] = "app";
            $separator[1] = "index";
        }
        
        $tab = ucfirst($separator[0]);
        $tab = "Controller\\" .  $tab . "Controller" ;
        
        if (class_exists($tab)) {
            $UserController = new $tab();
        }
        
        if(!empty($separator[1])){
            $tab1 = $separator[1];
            $tab1 = $tab1 . "Action";     
            if(method_exists ($tab , $tab1)){
                $UserController = new $tab();
                $UserController->$tab1();  
            }else{
                echo "ERROR 404";
            }
        }else{
            $UserController->indexAction();
        }
    }
}