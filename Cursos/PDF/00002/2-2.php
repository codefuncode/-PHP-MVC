<?php

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
         // Aquí podemos referirnos a Framework\Hola, como simplemente hola.
         // debido a la declaración de "uso" precedente
         $hello = new Hello();
         $hello->world();
      }
   }

}

namespace
{
   $hello = new Framework\Hello();
   $hello->world();
   //... prints "Hello world!"
   $foo = new Foo\Bar();

   // $foo->bar(); // Esta no funciona como dice el libro
   //... prints "Hello world!"
}
