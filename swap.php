<?php
$a  =   10;
$b  =   20;

echo "Value of a before swap is ".$a;
echo "<br/>";
echo "Value of b before swap is ".$b;

$a  =   $a + $b;
$b  =   $a  -   $b;
$a  =   $a  -   $b;

echo "<br/>";
echo "<br/>";
echo "Value of a before swap is ".$a;
echo "<br/>";
echo "Value of b before swap is ".$b;


?>