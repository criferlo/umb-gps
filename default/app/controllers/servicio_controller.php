<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of servicio_controller
 *
 * @author Cristhian
 */
Load::models("ubicacion");
class ServicioController extends AppController {
    //put your code here
    function recibir($latitud,$longitud){
        $ubi = new Ubicacion();
        $ubi->latitud=$latitud;
        $ubi->longitud=$longitud;
        $ubi->save();
    }
}
