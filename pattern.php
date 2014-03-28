<?php
echo "<pre/>"; 
echo"hi abhishek";
echo "hi arora";
n	=	20;
$no=$n;
$no_a	=	$n;
$no_b	=	$n;

for($i=1;$i<=$n;$i++)
{
	for($k=$no;$k<$n;$k++)
	{
	echo "_";
	}
	
	for($j=1;$j<2*$no;$j++)
	{
		echo "*";
	}
	
	
	for($s=2*$n;$s>2*$no_a-1;$s--)
	{
		echo "_";
	}
	
	for($q=1;$q<2*$no;$q++)
	{
	echo "*";
	}
	$no--;
	
	$no_a--;
	echo "<br/>";
}

for($i=1;$i<=$n;$i++)
{
	for($j=1;$j<=$n;$j++)
	{
		echo "_";
	}
	
	for($k=$no_b;$k<$n;$k++)
	{
			echo "_";
	}
	
	for($j=1;$j<2*$no_b;$j++)
	{
	echo "*";
	}
	
 	$no_b--;
	echo "<br/>";
	
}



/*
$abhishek['arora']	=	array(
				"name"=>"abhishek",
				"religion"=>"hindu"
				);
print_r($abhishek);
*/
?>
