<?php 

require_once "get.model.php";

class Connection {

    /*===================================== 
        Información de la base de datos
    =====================================*/

    static public function infoDatabase() {

        $infoDB = array(

            "database" => "ecommerce",
            "user" => "root",
            "pass" => ""
        );

        return $infoDB;

    }

    /*===================================== 
                    APIKEY
    =====================================*/

    static public function apikey() {

        return "Las123dsfASDCSa3532ASDcs232dsdf";

    }

    /*===================================== 
                    Acceso público
    =====================================*/

    static public function publicAccess() {

        $tables = [""];

        return $tables;

    }



}