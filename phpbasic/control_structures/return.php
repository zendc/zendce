<?php require_once '../../includes/header.php'; ?>
<pre>
<?php

function a() {
  echo "a\n";
  return;
}

function b() {
  echo "b\n";
}

function c() {
  echo "c\n";
  return ('c');
}

function d() {
  $d = 'd';
  return ($d);
}

function e() {
  $e = 'e';
  return $e;
}


function f() {
  $f = 'f';
  //return (); //parse error
}

function g() {
	$g = '';
	return ($g);
}


if(is_null(a())) {
  echo "a NULL \n";
}

if(is_null(b())) {
  echo "b NULL \n";
}

$c = c();
echo $c."\n";
echo d()."\n";
echo e()."\n";
echo f()."\n";
echo g()."\n";
if(!is_null(g())) {
  echo "g !NULL \n";
}

return 1;
echo "d\n";   //will not print
echo "e\n";   //will not print


?>
</pre>
<?php require_once '../../includes/footer.php'; ?>