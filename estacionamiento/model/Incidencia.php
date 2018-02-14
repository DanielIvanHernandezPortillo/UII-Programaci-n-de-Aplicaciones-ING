<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace model;

/**
 * Description of Incidencia
 *
 * @author Daniel Iván Hernández Portillo
 */
 class Incidencia {
    
    private $idIncidencia;  
    private $numeroEpleado;
    private $hora; // Hora de la incidencia 
    private $descripcion;//Descripcion de la incidencia
    private $automovilista = Array();//Arreglo de tipo automovilista
    
    //Constructor
    function __construct() {
        
    }

    function getIdIncidencia() {
        return $this->idIncidencia;
    }

    function getNumeroEpleado() {
        return $this->numeroEpleado;
    }

    function getHora() {
        return $this->hora;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setIdIncidencia($idIncidencia) {
        $this->idIncidencia = $idIncidencia;
    }

    function setNumeroEpleado($numeroEpleado) {
        $this->numeroEpleado = $numeroEpleado;
    }

    function setHora($hora) {
        $this->hora = $hora;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }
    
    function add(Automovilista $automovilista ){
    array_push($array, $automovilista);  

    }  
}
