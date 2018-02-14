<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Administrativo
 *
 * @author Daniel Iván Hernández Portillo
 */

namespace model;

class Administrativo extends Automovilista {
   
    public $numeroEmpleado;
    public $tabla ='administrativo';//Tabla para la insercion 
    public $con; //Objeto conexión
    
    //Contructor 
     function __construct($conn) {
        $this->con = $conn;
    }
    
//Metodo para la insertar el administrativo 
     public function insertAdministrativo($numeroEmpleado, $var1) {
         
         echo $var1;
         
        
        $insert = 'INSERT INTO ' . $this->tabla .
                ' (numeroEmpleado, idAutomovilista) VALUES ' .
                " ('" . $numeroEmpleado . "'," . $var1 .")";
        $stmt = $this->con->prepare($insert);
        echo $insert;
        $stmt->execute();
        echo $stmt->rowCount() . ' renglones afectados';
    }
    
   
   
}
