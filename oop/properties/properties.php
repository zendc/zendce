<?php
class SimpleClass
{
	const CONSTANT = 1;
   // invalid property declarations:
   public $var1 = 'hello ' . 'world';
   public $var2 = <<<EOD
hello world
EOD;
   public $var3 = 1+2;
   public $var4 = self::myStaticMethod();
   public $var5 = $myVar;
   public $var8 = CONSTANT;
   public $var9 = $this->publicFunc();
   // valid property declarations: number, string, NULL, array
   public $var6 = myConstant;
   public $var7 = array(true, false);
   
   // This is allowed only in PHP 5.3.0 and later.
   public $var8 = <<<'EOD'
hello world
EOD;

	public function publicFunc() {
		return 'p';
	}
}
?>