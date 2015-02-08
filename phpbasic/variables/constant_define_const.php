<?php require_once '../../includes/header.php'; ?>
<pre>
<?php

define('MIN_VALUE', '0.0');   // RIGHT - Works OUTSIDE of a class definition.
define('MAX_VALUE', '1.0');   // RIGHT - Works OUTSIDE of a class definition.

//const MIN_VALUE = 0.0;         WRONG - Works INSIDE of a class definition.
//const MAX_VALUE = 1.0;         WRONG - Works INSIDE of a class definition.

class Constants
{
    //define('MIN_VALUE', '0.0');  WRONG - Works OUTSIDE of a class definition.
    //define('MAX_VALUE', '1.0');  WRONG - Works OUTSIDE of a class definition.

    const MIN_VALUE = 0.0;      // RIGHT - Works INSIDE of a class definition.
    const MAX_VALUE = 1.0;      // RIGHT - Works INSIDE of a class definition.

    public static function getMinValue()
    {
        return self::MIN_VALUE;
    }

    public static function getMaxValue()
    {
        return self::MAX_VALUE;
    }
}

#Example 1:
$min = Constants::MIN_VALUE;
$max = Constants::MAX_VALUE;

#Example 2:
$min = Constants::getMinValue();
$max = Constants::getMaxValue();




?>
</pre>
<?php require_once '../../includes/footer.php'; ?>

