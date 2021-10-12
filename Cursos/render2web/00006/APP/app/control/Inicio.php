<?php

/**
 *
 */
class Inicio
{

   public function __construct()
   {
      if (file_exists('../app/vista/pag/inicio.php')) {
         include_once "../app/vista/pag/inicio.php";
      }
   }
}
