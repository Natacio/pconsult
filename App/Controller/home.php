<?php

use App\Core\ControllerBase;

use App\Auth;

// extende o controller base passando um model 
class Home extends ControllerBase {

    public function index(){
    
   
     
     $this->view('home/index',$dados=[]);

    
    
    }
   

}