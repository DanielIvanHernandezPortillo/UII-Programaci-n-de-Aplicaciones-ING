<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Estudiante
 *
 * @author Daniel Iván Hernández Portillo
 */


namespace model;



class Estudiante extends Automovilista{

     public $numeroControl;
     public $tabla ='estudiante';//Tabla para la insercion 
     public $con; //Objeto conexión
    
    
     //Constructor
     function __construct($conn) {
        $this->con = $conn;
    }
    
    //Metodo para realizar la insercion del estudiante
         public function insertEstudiante($numeroEstudiante, $var1) {
         
         echo $var1;
         
        
        $insert = 'INSERT INTO ' . $this->tabla .
                ' (numeroEstudiante, idAutomovilista) VALUES ' .
                " ('" . $numeroEstudiante . "'," . $var1 .")";
        $stmt = $this->con->prepare($insert);
        echo $insert;
        $stmt->execute();
        echo $stmt->rowCount() . ' renglones afectados';
    }

 
}
