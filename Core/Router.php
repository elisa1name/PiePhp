<?php
namespace Core;
class Router {
    private static $routes;
    public static function connect ($url, $route) {
        self::$routes[$url] = $route; 
    }
        public static function get ($url) {
            
            if(array_key_exists($url, self::$routes)){
                return self::$routes[$url];
            }
            else {
                echo "ERREUR 404";
            }
            var_dump(self::$routes);
        } 
    }