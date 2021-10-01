<?php
// localhost/Proyecto/PHP_MVC/Carlos_Alfaro/MVC/00009/APP/index.php
// localhost/Proyecto/CODEFUNCODE/PHP_MVC/Cursos/Carlos_Alfaro/MVC/00009/APP/index.php
include "config/config.php";
include "controlador/vista_controlador.php";
// ////////////////////
$inicio = new vistaControlador();

$inicio->carga_plantilla();
