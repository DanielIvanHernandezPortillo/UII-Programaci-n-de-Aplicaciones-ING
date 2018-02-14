<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Automovilista
 *
 * @author Daniel Iván Hernández Portillo
 */

namespace model;
abstract class  Automovilista {
    
   private $nombre;//Nombre o nombres del automovilistas  
   private $apellidoP;
   private $apellidoM;
   private $correoElectronico;
   private $numeroTarjetaEstacionamiento;
   private $telefonoCelular;
   private $telefonoDepartamento;
   private $licencia;
   private $tarjetaCirculacion;
   private $incidencia = Array();//Arreglo de incidencias
   private $registroEntradaSalida = Array();//Arreglo de incidencias
   private $tabla = 'automovilista';////Tabla para la insercion 
   private $con; //Objeto conexión
    
    
   //Constructor
   function __construct($nombre, $apellidoP, $apellidoM, $correoElectronico, $numeroTarjetaEstacionamiento, $telefonoCelular, $telefonoDepartamento, $licencia, $tarjetaCirculacion, $incidencia, $tabla, $con) {
       $this->nombre = $nombre;
       $this->apellidoP = $apellidoP;
       $this->apellidoM = $apellidoM;
       $this->correoElectronico = $correoElectronico;
       $this->numeroTarjetaEstacionamiento = $numeroTarjetaEstacionamiento;
       $this->telefonoCelular = $telefonoCelular;
       $this->telefonoDepartamento = $telefonoDepartamento;
       $this->licencia = $licencia;
       $this->tarjetaCirculacion = $tarjetaCirculacion;
       $this->incidencia = $incidencia;
       $this->tabla = $tabla;
       $this->con = $con;
   }
    
    function getNombre() {
        return $this->nombre;
    }

    function getApellidoP() {
        return $this->apellidoP;
    }

    function getApellidoM() {
        return $this->apellidoM;
    }

    function getCorreoElectronico() {
        return $this->correoElectronico;
    }

    function getNumeroTarjetaEstacionamiento() {
        return $this->numeroTarjetaEstacionamiento;
    }

    function getTelefonoCelular() {
        return $this->telefonoCelular;
    }

    function getTelefonoDepartamento() {
        return $this->telefonoDepartamento;
    }

    function getLicencia() {
        return $this->licencia;
    }

    function getTarjetaCirculacion() {
        return $this->tarjetaCirculacion;
    }

    function getIncidencia() {
        return $this->incidencia;
    }

    function getTabla() {
        return $this->tabla;
    }

    function getCon() {
        return $this->con;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellidoP($apellidoP) {
        $this->apellidoP = $apellidoP;
    }

    function setApellidoM($apellidoM) {
        $this->apellidoM = $apellidoM;
    }

    function setCorreoElectronico($correoElectronico) {
        $this->correoElectronico = $correoElectronico;
    }

    function setNumeroTarjetaEstacionamiento($numeroTarjetaEstacionamiento) {
        $this->numeroTarjetaEstacionamiento = $numeroTarjetaEstacionamiento;
    }

    function setTelefonoCelular($telefonoCelular) {
        $this->telefonoCelular = $telefonoCelular;
    }

    function setTelefonoDepartamento($telefonoDepartamento) {
        $this->telefonoDepartamento = $telefonoDepartamento;
    }

    function setLicencia($licencia) {
        $this->licencia = $licencia;
    }

    function setTarjetaCirculacion($tarjetaCirculacion) {
        $this->tarjetaCirculacion = $tarjetaCirculacion;
    }

    function setIncidencia($incidencia) {
        $this->incidencia = $incidencia;
    }

    function setTabla($tabla) {
        $this->tabla = $tabla;
    }

    function setCon($con) {
        $this->con = $con;
    }

        
    
    /*
     * Método para realizar la operación de inserción en la base de datos
     */

    public function insert( $placa) {
        
       
        
        
        $insert = 'INSERT INTO ' . $this->tabla .
                ' (nombre, apellidoP, apellidoM,correoElectronico, numeroTarjetaEstacionamiento, telefonocelular, telefonoDepartamento, licencia, tarjetaCirculacion ) VALUES ' .
                " ('" . $this->nombre . "','" . $this->apellidoP . "','" . $this->apellidoM . "','" . $this->correoElectronico . "'," . $this->numeroTarjetaEstacionamiento 
                . "," . $this->telefonoCelular . "," . $this->telefonoDepartamento . ",'" . $this->licencia . "','" . $this->tarjetaCirculacion ."')";
        $stmt = $this->con->prepare($insert);
        
        echo $insert;
        $stmt->execute();
        echo $stmt->rowCount() . ' renglones afectados';
    }
    
     function add(Incidencia $incidencia){
       array_push($array, $incidencia);  

    }
       function addR(RegistroEntradaSalida $registroEntradaSalida){
       array_push($array, $registroEntradaSalida);  

    }
    
    
    


    
   
   
   
}
