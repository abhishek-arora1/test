<?php
echo "<pre/>";

$a  =   array(90,75,70,72,71,65,63,68,61,62,62,56,75,70,56,56,53,53,53,41,31,32,31,31,28);
print_r($a);
$len    =   count($a);

for($i=0;$i<$len;$i++)
{
    for($j=0;$j<$i;$j++)
    {
        if($a[$j]>$a[$i])
        {
           $t   =   $a[$j];
           $a[$j]   =   $a[$i];
           $a[$i]   =   $t;
        }
    }
}
echo "<br/>";
print_r($a);

/*for($i=0;$i<$len;$i++)
{
    for($j=0;$j<$i;$j++)
    {
        if($a[$i]==$a[$j])
        {
            $k++;
        }
    }
}

?>