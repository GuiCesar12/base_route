<?php

namespace app\controllers;

use app\models\Ramal;

class RamalController{
    public function index(){
       require "app/views/index.php";
    }
    public function select(){
        $ramal = new Ramal;
        dd($ramal->all());
        return $ramal->all();
    }
}
