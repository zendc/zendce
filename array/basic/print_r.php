<pre>
<?php
/**
 * print_r ( mixed $expression [, bool $return = false ] )
 */
$a = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x', 'y', 'z'), false, true, 1, '', null, '1.5' => '1.5', '?' => '?');
print_r ($a);

$b = array ('m' => 'monkey', 'foo' => 'bar', 'x' => array ('x', 'y', 'z'));
$results = print_r($b, true); // $results now contains output from print_r
echo $results;


$array = array('', false, 42, array('42'));
echo "\nvar_dump\n";
var_dump($array);
echo "\nprint_r\n";
print_r($array);
echo "\nvar_export\n";
var_export($array);
?>
</pre>