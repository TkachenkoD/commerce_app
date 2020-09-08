<?php 

Class Router{

    private $routes;

    public function __construct(){
        $routerPath = ROOT.'/config/routs.php';
        $this->routes = include($routerPath);
    }
/**
 * returns requested string
 * 
 * 
 */
    private function getURI(){
        if(!empty($_SERVER['REQUEST_URI'])){
            // print_r($_SERVER['REQUEST_URI']);
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

   public function run(){
        $uri = $this->getURI();
        // print_r(">>>> ".$uri);
       foreach($this->routes as $uriPattern => $path){
//  print_r(">>>> ".$uri);die;
            if(preg_match("~$uriPattern~", $uri)){
                
                $internalRout = preg_replace("~$uriPattern~", $path, $uri);

                $parts = explode('/', $internalRout);
               
                $controllerName = ucfirst(array_shift($parts)."Controller");

                $actionName = "action".ucfirst(array_shift($parts));

                $parameters = $parts;
                
                //create class instance of Controller exp: NewsController.php
                $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';

                if(file_exists($controllerFile)){
                    include_once($controllerFile);
                }
               
                $controllerObject = new $controllerName;

                // call action method of controller class instance exp: $result = $controllerObject->$actionName($parameters);

                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
         
                if($result != null){
                    break;
                }
            } 
       
         }  
        
    }
}