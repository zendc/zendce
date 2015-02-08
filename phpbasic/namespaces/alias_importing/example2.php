<?php
use App\Lib2;

require_once('lib1.php');
require_once('lib2.php');

header('Content-type: text/plain');
echo Lib2\MYCONST . "\n";			//App\Lib2\MYCONST
echo Lib2\MyFunction() . "\n";		//App\Lib2\MyFunction
echo Lib2\MyClass::WhoAmI() . "\n";	//App\Lib2\MyClass::WhoAmI
?>