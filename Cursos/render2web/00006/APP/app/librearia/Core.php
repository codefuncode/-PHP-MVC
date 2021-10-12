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
   //  Variables  para definir pagina por defecto
   protected $ControladorActual = "Inicio";
   protected $MetodoActual      = "Index";
   protected $Parametros        = [];
   private $Url                 = "";

   public function __construct()
   {
      // ////////////////////////////////////
      //  SEccion para pruebas de resultados
      // -------------
      // echo "<br/>";
      // echo "<br/>";
      // var_dump($this->ControladorActual);
      // echo "<br/>";
      // echo "<br/>";
      // var_dump($this->getUrl());
      // echo "<br/>";
      // echo "<br/>";
      // ////////////////////////////////////

      // ///////////////////////////////////
      if ($this->getUrl()) {

         $this->Url = $this->getUrl();

         echo "<br/>";
         echo $this->ControladorActual;
         echo "<br/>";
         var_dump($this->Url[0]);
         echo "<br/>";
         echo "<br/>";

         $nombre_fichero = ucwords($this->Url[0]);

         $nombre_fichero = "../app/control/{$nombre_fichero}.php";

         if (file_exists($nombre_fichero)) {

            $this->ControladorActual = ucwords($this->Url[0]);

            echo "<br/>";
            echo "<br/>";
            echo "El fichero $nombre_fichero existe";
            require_once "../app/control/{$this->ControladorActual}.php";
            $this->ControladorActual = new $this->ControladorActual;
            unset($this->Url[0]);

         } else {
            $this->ControladorActual = "Inicio";
            require_once "../app/control/{$this->ControladorActual}.php";
            $this->ControladorActual = new $this->ControladorActual;

            echo "<br/>";
            echo "<br/>";
            echo "El fichero $nombre_fichero no existe";
         }

         echo "<br/>";
         echo "<br/>";
         var_dump($this->ControladorActual);
         echo "<br/>";
         echo "<br/>";

      } else {
         // echo "Parametro vacio";
         require_once "../app/control/{$this->ControladorActual}.php";
         $this->ControladorActual = new $this->ControladorActual;
      }
      // ///////////////////////////////////
   }

   public function getUrl()
   {
      if (isset($_GET['url'])) {

         /////////////////////////////////////////////////////
         //  Como en el tutorial
         // --------------------
         $this->Url = rtrim($_GET['url'], "/");
         $this->Url = filter_var($this->Url, FILTER_SANITIZE_URL);
         $this->Url = explode("/", $this->Url);
         return $this->Url;
         /////////////////////////////////////////////////////

         /////////////////////////////////////////////////////////////////////////////////////////
         // Instrucción creada por mi que reúne los requisitos de la estudiada
         // --------------
         // $this->Url = explode("/", filter_var(rtrim($_GET['url'], "/"), FILTER_SANITIZE_URL));
         // return explode("/", filter_var(rtrim($_GET['url'], "/"), FILTER_SANITIZE_URL));
         /////////////////////////////////////////////////////////////////////////////////////////

      } else {

         return false;
      }

   }

   // ///////////////
}
