<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Conexion {
    var $objconn;
    //Método de conexión
    var $dbusr = "root";
    var $dbpwd = "avaras08";
    var $dbhost = "localhost";
    var $dbname = "ferreteria";
    public function conectar() {
        $this->objconn = new mysqli($this->dbhost, $this->dbusr, $this->dbpwd, $this->dbname);
        if ($this->objconn->connect_errno) {
            return "Fallo al conectar a MySQL: (" . $this->objconn->connect_errno . ")";
        }
        return true;
    }
}
