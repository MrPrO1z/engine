<?php

namespace Application\Core;

class Router
{                   //функция __construct вызывается автоматически
   
    protected $routes = [];
    protected $params = [];
            
    public function __construct()
    {            // при вызове класса
        $arr = require 'application/config/routes.php';
        foreach ($arr as $key => $val){
            $this->add($key,$val);
        }
        
    }
    
    public function add($route,$params) {
        $route = '#^'.$route.'$#';
        $this->routes[$route] = $params;
        
    }
    
     public function match()
     {
        
        $url = trim($_SERVER['REQUEST_URI'], '/' );
        
        foreach ($this->routes as $route => $params) {
           
            if (preg_match($route, $url, $matches)) {
               
                    var_dump($params);
                }
                //echo '123';
            }   
        }
      
    
    
     public function run() {
       $this->match();
        //echo'start';
        
    }
} 