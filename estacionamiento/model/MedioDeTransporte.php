<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Auto
 *
 * @author Daniel Iván Hernández Portillo
 */
namespace model;
class MedioDeTransporte {
    
  
    private $idTransporte;
    private $marca;
    private $color;
    private $modelo;
    private $tipoTransporte;
    private $caracateristicas;
    private $tabla='medioTransporte';//tabla de base de datos
    private $guardia = Array();//Arreglo de guardia
    private $placa = Array();//Arreglo de placa
    
    //Constructor
    function __construct($placa, $marca, $color, $modelo, $tipoTransporte, $caracateristicas, $tabla) {
        $this->placa = $placa;
        $this->marca = $marca;
        $this->color = $color;
        $this->modelo = $modelo;
        $this->tipoTransporte = $tipoTransporte;
        $this->caracateristicas = $caracateristicas;
        $this->tabla = $tabla;
    }
    
    function getIdTransporte() {
        return $this->idTransporte;
    }

    function setIdTransporte($idTransporte) {
        $this->idTransporte = $idTransporte;
    }    

    function getMarca() {
        return $this->marca;
    }

    function getColor() {
        return $this->color;
    }

    function getModelo() {
        return $this->modelo;
    }

    function getTipoTransporte() {
        return $this->tipoTransporte;
    }

    function getCaracateristicas() {
        return $this->caracateristicas;
    }

    function getTabla() {
        return $this->tabla;
    }

    function setMarca($marca) {
        $this->marca = $marca;
    }

    function setColor($color) {
        $this->color = $color;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setTipoTransporte($tipoTransporte) {
        $this->tipoTransporte = $tipoTransporte;
    }

    function setCaracateristicas($caracateristicas) {
        $this->caracateristicas = $caracateristicas;
    }

    function setTabla($tabla) {
        $this->tabla = $tabla;
    }

    
    //Metodo para insertar un auto
     public function insertAuto() {
        
        $insert = 'INSERT INTO ' . $this->tabla .
                ' (nombre, apellidoP, apellidoM,correoElectronico, numeroTarjetaEstacionamiento, telefonocelular, telefonoDepartamento, licencia, tarjetaCirculacion ) VALUES ' .
                " ('" . $this->nombre . "','" . $this->apellidoP . "','" . $this->apellidoM . "','" . $this->correoElectronico . "'," . $this->numeroTarjetaEstacionamiento 
                . "," . $this->telefonoCelular . "," . $this->telefonoDepartamento . ",'" . $this->licencia . "','" . $this->tarjetaCirculacion ."')";
        $stmt = $this->con->prepare($insert);
        
        echo $insert;
        $stmt->execute();
        echo $stmt->rowCount() . ' renglones afectados';
    }
    
      function addG(Guardia $guardia){
       array_push($array, $guardia);  

    }
     function addP(Placa $placa){
       array_push($array, $placa);  

    }
    
    
    
}
