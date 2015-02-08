<?php
namespace my\name; // see "Defining Namespaces" section

class MyClass {}
function myfunction() {}
const MYCONST = 1;

$a = new MyClass;
$c = new \my\name\MyClass; // see "Global Space" section

$a = strlen('hi'); // see "Using namespaces: fallback to global
// function/constant" section

$d = namespace\MYCONST; // see "namespace operator and __NAMESPACE__
// constant" section
$d = __NAMESPACE__ . '\MYCONST';

echo "Namespace names PHP and php, and compound names starting with these names (like PHP\Classes)
are reserved for internal language use and should not be used in the userspace code.<hr>";
echo constant($d); // see "Namespaces and dynamic language features" section