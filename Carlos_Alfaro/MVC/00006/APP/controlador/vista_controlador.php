<?php

include "modelo/vista_modelo.php";

class vistaControlador extends vistaModelo
{

   public function carga_plantilla()
   {
      return include_once "vista/plantilla.php";
   }
}
