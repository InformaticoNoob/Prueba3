<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Categoria
 *
 * @author cetecom
 */
class Categoria {
    var $idcategoria;
    var $nombrecategoria;
    var $subcategoria;
    function __construct($nc='',$sc='') {
        $this->nombrecategoria = $nc;
        $this->subcategoria = $sc;
    }
    public function VerificaCategoria() {
        $oConn = new Conexion();
        if ($oConn->Conectar()) {
            $db = $oConn->objconn;
        } else {
            return false;
        }
        $sql = "SELECT * FROM Categoria WHERE NombreCategoria='$this->nombrecategoria' and SubCategoria='$this->subcategoria'";
        $resultado = $db->query($sql);
        if ($resultado->num_rows >= 1) {
            return true;
        } else {
            return false;
        }
    }
}
