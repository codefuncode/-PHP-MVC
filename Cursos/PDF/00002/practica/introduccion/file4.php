<?php
// namespace foo;

// include 'file1.php';
// include 'file2.php';
// include 'file3.php';
// use animate;
// use bar as canine;
// use foo as feline;

// echo Cat::says(), "<br />\n";
// echo \feline\Cat::says(), "<br />\n";

// echo \canine\Dog::says(), "<br />\n";
// echo \animate\Animal::breathes(), "<br />\n";

namespace my\name; // see "Defining Namespaces" section

class MyClass
{}
function myfunction()
{}
const MYCONST = 1;

$a = new MyClass;
$c = new \my\name\MyClass; // see "Global Space" section

$a = strlen('hi'); // see "Using namespaces: fallback to global
// function/constant" section

$d = namespace\MYCONST; // see "namespace operator and __NAMESPACE__
// constant" section
$d = __NAMESPACE__ . '\MYCONST';
echo constant($d); // see "Namespaces and dynamic language features" section
