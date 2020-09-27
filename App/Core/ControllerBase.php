<?php
namespace App\Core;

class ControllerBase{
    // recebe um model como parametro e retora um objeto o tipo model
    public function model($model){
        require_once '../App/Model/'.$model.'.php';
        return new $model;
    }

    public function view($view,$data=[]){

        require_once '../App/View/template.php';

    }
}