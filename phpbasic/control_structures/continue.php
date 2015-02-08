<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
echo " Note that in PHP the switch statement is considered a looping structure for the purposes of continue.\n";

$arr = array('one', 'two', 'three', 'four', 'stop', 'five');
while (list($key, $value) = each($arr)) {
  if (!($key % 2)) { // skip odd members
    continue;
  }
  echo "$value\n";
}
echo "---------------------------------\n";

$i = 0;
while ($i++ < 5) {
  echo "Outer<br />\n";
  while (1) {
    echo "Middle<br />\n";
    while (1) {
      echo "Inner<br />\n";
      continue 3;
    }
    echo "This never gets output.<br />\n";
  }
  echo "Neither does this.<br />\n";
}


$i = 0;
while ($i++ < 2) {
  echo "Outer<br />\n";
  while (1) {
    echo "Middle<br />\n";
    while (1) {
      echo "Inner<br />\n";
      //Fatal error:  Cannot break/continue 4 levels
      //continue 4;
    }
    echo "This never gets output.<br />\n";
  }
  echo "Neither does this.<br />\n";
}


for ($i = 0; $i < 5; ++$i) {
  if ($i == 2) {
    //Fatal error: 'continue' operator with non-constant operand is no longer supported
    //continue
    //print "$i\n";
  }
}


$level = 1;
for ($i = 0; $i < 5; ++$i) {
    if ($i == 2)
        continue $level; //Fatal error: 'continue' operator with non-constant operand is no longer supported
}

for ($i = 0; $i < 5; ++$i) {
    if ($i == 2)
        //Fatal error: 'continue' operator accepts only positive numbers
        //continue 0;
}
?>
</pre>
<?php require_once '../../includes/footer.php'; ?>