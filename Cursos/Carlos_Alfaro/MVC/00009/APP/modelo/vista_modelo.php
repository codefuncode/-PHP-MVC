<?php

class vistaModelo
{
   protected function obtener_vistas_modelo($vistas)
   {
      $listaBlanca = [
         "00001",
         "00002",
         "00003",
         "00004",
         "00005",
         "00006",
         "00007",
         "00008",
      ];
      if (in_array($vistas, $listaBlanca)) {

         if (is_file("./vista/{$vistas}.php")) {

            $contenido = "./vista/{$vistas}.php";

         } else {

            $contenido = "./vista/00001.php";
         }

      } else {

         $contenido = "./vista/00001.php";
      }
      return $contenido;
   }
}
