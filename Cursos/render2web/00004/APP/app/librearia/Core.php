<?php

/**
 *
 */
class Core
{
   protected $ControladorActual = "paginas";
   protected $MetodoActual      = "index";
   protected $Parametros        = [];

   public function __construct()
   {
      $url = $this->getUrl();
   }

   public function getUrl()
   {
      if (isset($_GET['url'])) {
         echo $_GET['url'];
      } else {
         echo "No hy nada aqui";
      }

   }
}
