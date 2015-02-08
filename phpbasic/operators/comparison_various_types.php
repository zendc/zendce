<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
/**
 * 9 operators
 * loose comparisons with ==
 * strict comparisons with ===
 */

echo "null or string VS string\n";
/**
 * null or string VS string
 * Convert NULL to "", numerical or lexical comparison
 */
var_dump(NULL == "a"); // "" == "a" -> FALSE
var_dump(NULL == ""); // "" == "" -> TRUE
var_dump(NULL < "a"); // "" < "a" -> TRUE
echo "<hr>";

/**
 * bool or null	VS anything
 * Convert both sides to bool, FALSE < TRUE 
 */
echo "bool or null VS anything\n";
var_dump(NULL == 1); // FALSE == TRUE -> FALSE
var_dump(NULL == array()); // FALSE == FALSE -> TRUE
var_dump(TRUE == "a"); // TRUE == TRUE -> TRUE
var_dump(FALSE < "a"); // FALSE < TRUE -> TRUE
var_dump(TRUE < 100); // TRUE < TRUE -> FALSE
var_dump(TRUE > 100); // TRUE > TRUE -> FALSE
var_dump(TRUE == 100); // TRUE == TRUE -> TRUE
echo "<hr>";


/**
 * object VS object
 * Built-in classes can define its own comparison, 
 * different classes are uncomparable, same class - compare properties the same way as arrays (PHP 4), PHP 5 has its own explanation
 */
echo "object VS object\n";
$o1 = new stdClass();
$o1->prop1 = 'c';
$o1->prop2 = 25;
$o1->prop3 = 201;
$o1->prop4 = 1000;

$o2 = new stdClass();
$o2->prop1 = 'c';
$o2->prop2 = 25;
$o2->prop3 = 200;
$o2->prop4 = 9999;

var_dump($o1 == $o2); //false

echo (int)($o1 < $o2); // 0
echo (int)($o1 > $o2); // 1

$o1->prop3 = 200;
echo (int)($o1 == $o2); // 0
echo (int)($o1 < $o2); // 1
echo (int)($o1 > $o2); // 0
echo "<hr>";



echo "object VS object\n";
class Flag
{
    public $flag;

    function Flag($flag = true) {
        $this->flag = $flag;
    }
}

class OtherFlag extends Flag
{
    public $flag;

    function OtherFlag($flag = true) {
        $this->flag = $flag;
    }
}

$o = new Flag();
$p = new Flag();
var_dump($o == $p);		//true
var_dump($o === $p);	//false
var_dump($o === $o);	//true

$o->flag = 1000;
var_dump($o == $p);		//true

$r = new OtherFlag();
var_dump($r == $p);		//false

echo "<hr>";
?>
</pre>
<?php require_once '../../includes/footer.php'; ?>