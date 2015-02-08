<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
echo "<h3>Array Operators (6)</h3>";
$a = array("a" => "apple", "b" => "banana");
$b = array("a" => "pear", "b" => "strawberry", "c" => "cherry");

$c = $a + $b; // Union of $a and $b
echo "Union of \$a and \$b: \n";
var_dump($c);

$c = $b + $a; // Union of $b and $a
echo "Union of \$b and \$a: \n";
var_dump($c);


$a = array("apple", "banana");

$b = array(1 => "banana", "0" => "apple");
$c = array(1 => "banana", "0" => "apple", "pear");

$d = array(1 => "banana", 0 => "apple");
$e = array(0 => "apple", 1 => "banana");
$f = array("0" => "apple", 1 => "banana");

var_dump($a == $b); // bool(true)
var_dump($a == $c); // bool(false)
var_dump($a === $b); // bool(false)
var_dump($a === $d); // bool(false)
var_dump($a === $e); // bool(true)
var_dump($a === $f); // bool(true)
?>
</pre>
<?php require_once '../../includes/footer.php'; ?>