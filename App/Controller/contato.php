<?php

use App\Core\ControllerBase;

class Contato extends ControllerBase{

    public function index(){
        $this->view('contato/index',$dados=[]);
    }
}