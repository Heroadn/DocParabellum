<?php

class Application{
    protected $controller  = 'IndexController';
    protected $action = 'Index';
    protected $prams = [];

    public  function __construct(){
        $this->parseURL();
        if(file_exists(CONTROLLER . $this->controller . '.php')){
            $this->controller = new $this->controller;

            if(method_exists($this->controller,$this->action)){
                //[$this->controller,$this->action] ->class->função a ser chamada
                //$this->prams -> parametros a serem passados a função class->função($this->prams[0],$this->prams[1],...)
                call_user_func_array([$this->controller,$this->action],$this->prams);
            }
        }
    }

    protected function parseURL(){
        $request = trim($_SERVER['REQUEST_URI'],'/');
        if(!empty($request)){
            $url = explode('/',$request);
            $this->controller = isset($url[0]) ? $url[0] . 'Controller' : 'indexController';
            $this->action = isset($url[1]) ? $url[1] : 'Index';

            //Removendo o controller e action do url, e adicionando parametros adicionais na url no prams
            unset($url[0],$url[1]);
            $this->prams = !empty($url) ? array_values($url) : [];
        }
    }
}