<?php
namespace App\Lib1;

require_once('lib1.php');
require_once('lib2.php');

header('Content-type: text/plain');
echo MYCONST . "\n";			//App\Lib1\MYCONST
echo MyFunction() . "\n";		//App\Lib1\MyFunction
echo MyClass::WhoAmI() . "\n";	//App\Lib1\MyClass::WhoAmI

?>