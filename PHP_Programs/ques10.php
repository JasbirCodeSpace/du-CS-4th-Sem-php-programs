<?php
$a[0]=$_POST["n1"];
$a[1]=$_POST["n2"];
$a[2]=$_POST["n3"];
$a[3]=$_POST["n4"];
$a[4]=$_POST["n5"];

echo "Array size: ".count($a)."<br>";
echo "Array is: ";
foreach ($a as $values)
echo $values." ";
echo "<br>";

echo "Sorted Array is: ";
sort($a);
foreach ($a as $values)
echo $values." ";
?>