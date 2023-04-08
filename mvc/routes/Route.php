<?php

namespace Router;

class Route{
    private $path;
    private $action;
    private $matches;


    public function __construct($path,$action)
    {
        $this->path = trim($path,'/');
        $this->action = $action;
    }

    public function matches(string $url){
        $path = preg_replace('#:([\w]+)#','([^/]+)',$this->path);
        $pathtomach = "#^$path#";

        if(preg_match($pathtomach,$url,$matches)){
            $this->matches = $matches;
            return true;
        }else{
            return false;
        }
    }


    public function execution(){
       $params = explode('@',$this->action);
       $controller = new $params[0]();
       $method = $params[1];

       //return isset($this->matches[1]) ? $controller->$method($this->matches[1]) : $controller->$method();
       if(isset($this->matches[1])){
           return $controller->$method($this->matches[1]);
       }else{
           return $controller->$method();
       }
    }
}