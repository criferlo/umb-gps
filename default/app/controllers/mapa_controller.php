<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of mapa_controller
 *
 * @author Cristhian
 */
Load::models("ubicacion");
class MapaController extends AppController {
    //put your code here
    function index(){
        $ubi = new Ubicacion();
        $this->arr = array();
        $this->arr = $ubi->find();
        
    }
}
