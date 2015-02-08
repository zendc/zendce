<?php
use App\Lib1 as L;
use App\Lib2\MyClass as Obj;

header('Content-type: text/plain');
require_once('lib1.php');
require_once('lib2.php');

echo L\MYCONST . "\n";				//App\Lib1\MYCONST
echo L\MyFunction() . "\n";			//App\Lib1\MyFunction
echo L\MyClass::WhoAmI() . "\n";	//App\Lib1\MyClass::WhoAmI
echo Obj::WhoAmI() . "\n";			//App\Lib2\MyClass::WhoAmI
?>