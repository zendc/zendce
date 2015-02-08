<?php
namespace PHP; // see "Defining Namespaces" section

class MyClass {}
function myfunction() {}
const MYCONST = 1;

$a = new MyClass;
$c = new \PHP\MyClass; // see "Global Space" section

$a = strlen('hi'); // see "Using namespaces: fallback to global
// function/constant" section

$d = namespace\MYCONST; // see "namespace operator and __NAMESPACE__
// constant" section
$d = __NAMESPACE__ . '\MYCONST';
echo constant($d); // see "Namespaces and dynamic language features" section