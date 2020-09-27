<?php

use App\Core\ControllerBase;

class Orcamento extends ControllerBase{

    public function index(){
        
      
       if(isset($_POST['enviar'])):

        echo "enviado";
        var_dump( $_POST);

       endif;
   
        $this->view('orcamento/index',$dados=[]);
   
       
       
       }
}