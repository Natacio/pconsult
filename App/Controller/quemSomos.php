<?php

use App\Core\ControllerBase;

class QuemSomos extends ControllerBase{
    
    public function index(){     
        $this->view('quem-somos/index',$dados=[]);
   
       
       
       }
}