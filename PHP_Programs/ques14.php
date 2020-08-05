<?php
$a1=array("c1"=>"Red","c2"=>"Green","c3"=>"White","c4"=>"Black");
$a2=array("c2","c4");
$i=0;

foreach($a2 as $x)
{
	foreach($a1 as $y=>$y_value)
	{
		if ($x==$y)
		{
			$a[$i]=$y_value;
			$i++;
		}
	}
	
}
$i =0;
foreach ($a as $z=>$z_value)
{
	echo "[".$a2[$i++]."]"."=>".$z_value."<br>";
}

?>
