<?php 

/* =================
   DEPURAR ERRORES
==================*/
ini_set("display_errors", 1); // Activa la visualización de errores
ini_set("log_errors", 1);
ini_set("error_log", "C:/xampp/htdocs/tiendaecommerce/web/php_error_log");


/* =================
   REQUIRES
==================*/
require_once "controllers/template.controller.php";
require_once "controllers/curl.controller.php";

/* =================
   PLANTILLA
==================*/
$index = new TemplateController();

$index->index();

