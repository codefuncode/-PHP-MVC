<?php

class vistaModelo
{
   protected function obtener_vistas_modelo($vistas)
   {
      $listaBlanca = [
         "0001",
         "0002",
         "0003",
         "0004",
         "0005",
         "0006",
         "0007",
         "0008",
      ];
      if (in_array($vistas, $listaBlanca)) {
         if (is_file("./vista/{$vistas}.php")) {

            $contenido = "./vista/{$vistas}.php";

         } else {

            $contenido = "00001";
         }
      } elseif ($vistas == "00001") {

         $contenido = "00001";

      } elseif ($vistas == "index") {

         $contenido = "00001";

      } else {

         $contenido = "00001";
      }
      return $contenido;
   }
}
