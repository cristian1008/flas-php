<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Datos
 *
 * @author TECH INSTITUTE
 */
class Datos {

    //put your code here
    private $hostname = "localhost";
    private $user = "root";
    private $password = "";
    private $bd = "flas11";

    public function getHostname() {
        return $this->hostname;
    }

    function getUser() {
        return $this->user;
    }

    function getPassword() {
        return $this->password;
    }

    function getBd() {
        return $this->bd;
    }

}
