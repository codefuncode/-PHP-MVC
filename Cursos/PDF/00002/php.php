<?php

// Listing 2-2. Namespaces
namespace Framework {
   class Hello
   {
      public function world()
      {
         echo "Hello world!";
      }
   }
}

namespace Foo {
   // nos permite referirnos a la clase HELLO
   // sin especificar su espacio de nombres cada vez
   use Framework\Hello as Hello;

   class Bar
   {
      public function __construct()
      {
         // Aquí podemos referirnos a Framework \ Hola, como simplemente hola.
         // debido a la declaración de "uso" precedente
         $hello = new Hello();
         $hello->world();
      }
   }

}

namespace
{
   $hello = new Framework\Hello();
   $hello->world(); //... prints "Hello world!"
   $foo = new Foo\Bar();
   $foo->bar(); //... prints "Hello world!"
}

// ////////////////////////////////////////////////////////////////

function autoload($class)
{
   $paths = explode(PATH_SEPARATOR, get_include_path());
   $flags = PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE;
   $file  = strtolower(str_replace("\\", DIRECTORY_SEPARATOR, trim($class, "\\"))) . ".php";
   foreach ($paths as $path) {
      $combined = $path . DIRECTORY_SEPARATOR . $file;
      if (file_exists($combined)) {
         include $combined;
         return;
      }
   }
   throw new Exception("{$class} not found");
}
class Autoloader
{
   public static function autoload($class)
   {
      autoload($class);
   }
}
spl_autoload_register('autoload');
spl_autoload_register(array('autoloader', 'autoload'));
// Estos solo se pueden llamar dentro de un contexto de clase ...
// spl_autoload_registro (Array ($ esto, 'autoload'));
// spl_autoload_register (__ clase __ ':: cargar');
