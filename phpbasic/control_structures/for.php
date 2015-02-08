<?php require_once '../../includes/header.php'; ?>
<pre>
<?php

/* example 1 */
for ($i = 1; $i <= 10; $i++) {
    echo $i;
}
echo "\n";

/* example 2 */
for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i;
}
echo "\n";

/* example 3 */
$i = 1;
for (; ; ) {
    if ($i > 10) {
        break;
    }
    echo $i;
    $i++;
}
echo "\n";

/* example 4 */
for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);
echo "\n";
echo "$j\n";    //55


for($i = 0; $i <= 5; $i++);
echo $i."\n"; //6

for($i = 0; $i <= 5; $i++)
    echo $i; //012345
echo "\n";

for($i = 0; $i <= 5; ++$i)
    echo $i; //012345
echo "\n";

//ABCDEFGHIJKLMNOPQRSTUVWX
for($c = 'A'; $c <= 'X'; $c ++) {
    echo $c;
}
echo "\n";


echo "You can use strtotime with for loops to loop through dates\n";
for ($date = strtotime("2014-01-01"); $date < strtotime("2014-02-01"); $date = strtotime("+1 day", $date)) {
    echo date("Y-m-d", $date)."<br />";
}

for($i = 0; $i <= 5; $i++); {
    echo $i;    //6
}
echo "\n";

//$jx NULL cast to 0
for($jx = 0; $jx <= 5;) {
    echo $jx;
    $jx ++;
}
echo "\n";

//$jy AB cast to 0
$jy = 'AB';
for($jy = 0; $jy <= 5;) {
    echo $jy;
    $jy ++;
}
?>
</pre>
<?php require_once '../../includes/footer.php'; ?>