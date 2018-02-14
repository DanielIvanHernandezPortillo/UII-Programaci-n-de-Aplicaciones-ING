<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace model;

/**
 * Description of RegistroEntradaSalida
 *
 * @author Daniel Iván Hernández Portillo
 */
class RegistroEntradaSalida {
    
    private $idRegistro;
    private $numeroTarjetaEstacionamiento;
    private $fechaEntrada;
    private $fechaSalida;
    private $incidencia = Array();//Arreglo de incidencias
    private $automovilista = Array();//Arreglo de automovilistas
    private $guardia = Array();//Arreglo de guardia
    
    //Constructor
    function __construct($idRegistro, $numeroTarjetaEstacionamiento, $fechaEntrada, $fechaSalida) {
        $this->idRegistro = $idRegistro;
        $this->numeroTarjetaEstacionamiento = $numeroTarjetaEstacionamiento;
        $this->fechaEntrada = $fechaEntrada;
        $this->fechaSalida = $fechaSalida;
    }
    
    function getIdRegistro() {
        return $this->idRegistro;
    }

    function getNumeroTarjetaEstacionamiento() {
        return $this->numeroTarjetaEstacionamiento;
    }

    function getFechaEntrada() {
        return $this->fechaEntrada;
    }

    function getFechaSalida() {
        return $this->fechaSalida;
    }

    function setIdRegistro($idRegistro) {
        $this->idRegistro = $idRegistro;
    }

    function setNumeroTarjetaEstacionamiento($numeroTarjetaEstacionamiento) {
        $this->numeroTarjetaEstacionamiento = $numeroTarjetaEstacionamiento;
    }

    function setFechaEntrada($fechaEntrada) {
        $this->fechaEntrada = $fechaEntrada;
    }

    function setFechaSalida($fechaSalida) {
        $this->fechaSalida = $fechaSalida;
    }
     
     function addI(Incidencia $incidencia){
       array_push($array, $incidencia);  

    }
     function addA(Automovilista $automovilista){
       array_push($array, $automovilista);  

    }
    
     function addG(Guardia $guardia){
       array_push($array, $guardia);  

    }



 
}
