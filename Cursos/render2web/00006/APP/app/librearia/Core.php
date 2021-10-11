<?php

/**
 *
 * 1-Contolador
 * 2-Metodo
 * 3-Parametro
 * Ejemplo: Contolador/Metodo/Parametro
 */
class Core
{
   protected $ControladorActual = "Paginas";
   protected $MetodoActual      = "Index";
   protected $Parametros        = [];
   private $Url                 = "";

   public function __construct()
   {

      echo "<br/>";
      echo "<br/>";
      var_dump($this->ControladorActual);
      echo "<br/>";
      echo "<br/>";
      var_dump($this->getUrl());
      echo "<br/>";
      echo "<br/>";

      // if (!$this->getUrl() == false) {
      //    $this->Parametros = $this->getUrl();
      // var_dump($this->Parametros);
      // } else {
      //    echo "URL esta vacia";
      // }
      if ($this->getUrl()) {

         $this->Url = $this->getUrl();

         echo "<br/>";
         echo "<br/>";
         var_dump($this->Url[0]);
         echo "<br/>";
         echo "<br/>";

         $nombre_fichero = ucwords($this->Url[0]);

         $nombre_fichero = "../app/control/{$nombre_fichero}.php";

         if (file_exists($nombre_fichero)) {

            $this->ControladorActual = ucwords($this->Url[0]);
            unset($this->Url[0]);
            echo "<br/>";
            echo "<br/>";
            echo "El fichero $nombre_fichero existe";

         } else {
            echo "<br/>";
            echo "<br/>";
            echo "El fichero $nombre_fichero no existe";
         }

         echo "<br/>";
         echo "<br/>";
         var_dump($this->ControladorActual);
         echo "<br/>";
         echo "<br/>";
         require_once "../app/control/{$this->ControladorActual}.php";
         $this->ControladorActual = new $this->ControladorActual;
      }

   }

   public function getUrl()
   {
      if (isset($_GET['url'])) {

         /////////////////////////////////////////////////////
         // echo $_GET['url'];
         // for ($i = 0; $i < count($Parametros); $i++) {
         //    echo "<br/>";
         //    echo $Parametros[$i];
         // }
         ////////////////////////////////////////////////////

         /////////////////////////////////////////////////////
         // $this->Url = explode("/",
         //    filter_var(trim($_GET['url']),
         //       FILTER_SANITIZE_URL)
         // );
         /////////////////////////////////////////////////////

         /////////////////////////////////////////////////////
         //  Como en el tutorial
         // --------------------
         // $this->Url = rtrim($_GET['url'], "/");
         // $this->Url = filter_var($this->Url, FILTER_SANITIZE_URL);
         // $this->Url = explode("/", $this->Url);
         /////////////////////////////////////////////////////

         /////////////////////////////////////////////////////////////////////////////////////////
         //  A mi manera
         // --------------
         // $this->Url = explode("/", filter_var(rtrim($_GET['url'], "/"), FILTER_SANITIZE_URL));
         /////////////////////////////////////////////////////////////////////////////////////////

         // return $this->Url;

         return explode("/", filter_var(rtrim($_GET['url'], "/"), FILTER_SANITIZE_URL));

      } else {

         return false;
      }

   }

   // ///////////////
}
