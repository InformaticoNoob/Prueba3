<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Usuario {
    var $idusuario;
    var $nombre;
    var $pass;
    function __construct($usu = "", $clave = "") {
        $this->nombre = $usu;
        $this->pass = $clave;
    }
    //Valida la existencia de un usuario
    function VerificaUsuario() {
        $oConn = new Conexion();
        if ($oConn->Conectar()) {
            $db = $oConn->objconn;
        } else {
            return false;
        }
        $sql = "SELECT * FROM Usuario WHERE NombreUsuario='$this->nombre'";
        $resultado = $db->query($sql);
        if ($resultado->num_rows >= 1) {
            return true;
        } else {
            return false;
        }
    }
    function VerificaUsuarioClave() {
        $oConn = new Conexion();
        if ($oConn->Conectar()) {
            $db = $oConn->objconn;
        } else {
            return false;
        }
        $passmd5 = md5($this->pass);
        $sql = "SELECT * FROM Usuario WHERE NombreUsuario='$this->nombre' and Contraseña='$passmd5'";
        $resultado = $db->query($sql);
        if ($resultado->num_rows >= 1) {
            return true;
        } else {
            return false;
        }
    }
    function VerificaLocal() {
        $usu = "r3n4t0r0m3r0";
        $key = "g1thubd";
        if ($this->nombre == $usu && $this->pass == $key) {
            return true;
        } else {
            return false;
        }
    }
}
