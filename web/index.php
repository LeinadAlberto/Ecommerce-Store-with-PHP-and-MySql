<?php 

/* ===================================
            DEPURAR ERRORES
====================================*/

ini_set("display_errors", 1); // Activa la visualización de errores
ini_set("log_errors", 1);
ini_set("error_log", "C:/xampp/htdocs/tiendaecommerce/web/php_error_log");

require_once "controllers/controller.template.php";

$index = new TemplateController();

$index->index();