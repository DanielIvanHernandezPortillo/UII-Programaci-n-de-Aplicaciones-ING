<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Guardia
 *
 * @author Daniel Iván Hernández Portillo
 */
namespace model;
class Guardia {
    
    private $idGuardia;
    private $nombre;
    private $apellidoP;
    private $apellidoM;
    private $registroEntradaSalida = Array();//Arreglo de incidencias
    private $medioTransporte = Array();//Arreglo transporte
    
    function __construct($idGuardia, $nombre, $apellidoP, $apellidoM) {
        $this->idGuardia = $idGuardia;
        $this->nombre = $nombre;
        $this->apellidoP = $apellidoP;
        $this->apellidoM = $apellidoM;
    }
    
    function getIdGuardia() {
        return $this->idGuardia;
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

    function setIdGuardia($idGuardia) {
        $this->idGuardia = $idGuardia;
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
    
    function buscarPropietario( $numeroTarjetaEstacionamiento){

     return;   
    }
    function llamarPropietario($telefonoCelular){

     return;   
    }
    function conocerNumeroVehiculosRegistrados( $fechaEntrada,$fechaSalida ){

     return;   
    }
    function reportarNumeroIncidencias( $fechaEntrada,$fechaSalida ){

     return;   
    }
    function consultarHorarioAfluencia( $fechaEntrada,$fechaSalida ){

     return;   
    }
    function consultarNumeroVehiculo( ){

     return;   
    }
    function registrarAtomovilista( $nombre, $apellidoP, $apellidoM, $correoElectronico,
            $numeroEmpleado,$placa,$color,$licenciaConduci, $tarjetaCirculacion, $telefonoCelular,
            $telefonoDepartamento, $numeroEstudiante ){

     return;   
    }
      function addR(RegistroEntradaSalida $registroEntradaSalida){
       array_push($array, $registroEntradaSalida);  

    }
    
      function addT(MedioDeTransporte $medioTransporte){
       array_push($array, $medioTransporte);  

    }
    
    



    
}
