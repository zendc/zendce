<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
/**
 * 9 operators
 * loose comparisons with ==
 * strict comparisons with ===
 */

echo "string, resource or number VS string, resource or number\n";
/**
 * string, resource or number VS string, resource or number
 * Translate strings and resources to numbers, usual math
 */
var_dump("1a" == 1); // 1 == 1 -> TRUE
var_dump("a1" == 1); // 0 == 1 -> FALSE
var_dump("" == 0); // 0 == 0 -> TRUE
var_dump(NULL == 0); // (bool)NULL == (bool)0 -> TRUE
var_dump(08 == 8); // 08 is tring will be convert to 0 -> FALSE
var_dump(010 == 8); // 010 octal = 8
$resource = imagecreate(5, 5);
var_dump($resource == 1); // it's depend resource id
echo "<hr>";


echo "array vs array\n";
/**
 * array	array	Array with fewer members is smaller, if key 
 * from operand 1 is not found in operand 2 then arrays are uncomparable, otherwise - compare value by value (see following example)
 */

$a = array("apple", "banana");
$b = array(1 => "banana", "0" => "apple");

var_dump($a == $b); // bool(true)
var_dump($a === $b); // bool(false)
echo "<hr>";

/**
 *object	anything	object is always greater ???
 */
$obj = new stdClass();
$obj->int = 11111;

//Notice:  Object of class stdClass could not be converted to int
var_dump($obj > 100);	//false
var_dump($obj > 'aaa');	//true
var_dump($obj > NULL);	//true
echo "<hr>";


/**
 * array	anything	array is always greater
 */
$array = array();
var_dump($array > 100);		//true
var_dump($array > 'aaa');	//true
var_dump($array > NULL);	//false

$array = array(111);
var_dump($array > 100);		//true
var_dump($array > 'aaa');	//true
var_dump($array > NULL);	//true
?>
</pre>
<?php require_once '../../includes/footer.php'; ?>