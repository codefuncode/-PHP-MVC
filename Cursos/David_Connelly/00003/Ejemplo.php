<?php

/**
 *
 */
class Ejemplo
{

   public function __construct()
   {

   }

   public function unSaludo($value = '')
   {
      echo "Camel Case dice: ¿Como estas {$value}?<br/>";
   }
   public function un_saludo($value = '')
   {
      echo "No Camel Case dice: ¿Como estas {$value}?<br/>";
   }
}

$Saludar = new Ejemplo;

$Saludar->unSaludo("Carlos");
$Saludar->un_saludo("Carlos");
