<?php

/**
 * Description of Database
 *
 * @author SOMA-DANIEL
 */
class Database {

    private $host = 'localhost';
    private $database = 'estacionamiento';
    private $usuario = 'user_php';
    private $password = 'php';
    private $con;

    public function getConexion() {
        $this->con = null;
        try {
            $this->con = new PDO('mysql:host=' .
                    $this->host . ';dbname=' . $this->database, $this->usuario, $this->password);
        } catch (PDOException $e) {
            echo 'No puede conectarse con la base de datos' .
            $e->getMessage();
        }
        return $this->con;
    }

}

?>