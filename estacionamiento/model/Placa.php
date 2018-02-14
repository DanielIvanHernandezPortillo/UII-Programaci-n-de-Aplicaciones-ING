<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace model;

/**
 * Description of Placa
 *
 * @author Daniel Iván Hernández Portillo
 */
class Placa {
  
    private $idPlaca;
    private $numeroPlaca;
    private $estadoRepublica;
    
    
    //Conctructor
    function __construct($idPlaca, $numeroPlaca, $estadoRepublica) {
        $this->idPlaca = $idPlaca;
        $this->numeroPlaca = $numeroPlaca;
        $this->estadoRepublica = $estadoRepublica;
    }
    
    function getIdPlaca() {
        return $this->idPlaca;
    }

    function getNumeroPlaca() {
        return $this->numeroPlaca;
    }

    function getEstadoRepublica() {
        return $this->estadoRepublica;
    }

    function setIdPlaca($idPlaca) {
        $this->idPlaca = $idPlaca;
    }

    function setNumeroPlaca($numeroPlaca) {
        $this->numeroPlaca = $numeroPlaca;
    }

    function setEstadoRepublica($estadoRepublica) {
        $this->estadoRepublica = $estadoRepublica;
    }



}
