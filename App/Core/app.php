<?php

namespace App\Core;

//classe para gerenciamento de rotas 

class App {
    // variaveis para pegar os parametros da url
    protected $controller = 'home';
    protected $method     = 'index';
    protected $params     =  [];

    public function  __construct()
    {
        // obtem a url vinda do usuario 
        $url = $this->parseUrl();
       
        // verifica se existe um controller no diretorio 
       if(file_exists( '../App/Controller/'.$url[1].'.php')):
            
            $this->controller=$url[1]; 
            
            unset($url[1]);
       endif;
       

       // inclui o controller 
       require_once '../App/Controller/'.$this->controller.'.php';
       // cria um objeto do tipo controller que esta no diretorio acima
       $this->controller = new $this->controller;
       //verifica se existe o metodo no campo 2 vinda da url 
       if(isset($url[2])):
        //verifica se existe o metodo no objeto controller
        if(method_exists($this->controller,$url[2])):
            
            $this->method = $url[2];
           
            unset($url[2]);
            unset($url[0]);
            
        else:

        endif;
          
       endif;
       // se mesmo depois de limpar o array
       $this->params = $url ? array_values($url) : [];
      
       // executa a função com um array de parametros

       call_user_func_array([$this->controller,$this->method],$this->params);

       
    }

    private function parseUrl(){
        // responsavel por pegar a url e retorna um array com a url separada 
        return explode('/',filter_var($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'],FILTER_SANITIZE_URL));
    }

}