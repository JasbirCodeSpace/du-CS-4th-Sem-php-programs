<?php
$s=$_GET["n1"];
$s2=$_GET["n2"];
if (isset($_REQUEST["r1"]))
{
	$g=$_GET["r1"];

switch ($g)
{
	case 1:
	echo "Before removing whitespaces: ".$s."<br>";
    $s=trim($s);
    echo "After removing whitespaces: ".$s."<br>";
	break;
	
	case 2:
	echo "To check if \"".$s2."\" is present in \"".$s."\""."<br>";
     echo strstr($s,$s2);
     echo "<br>";
	 break;
	 
	 case 3:
	 echo "Check for Lowercase"."<br>"; 
if (preg_match('/[a-z]/',$s))
	echo "lowercase";
else
	echo "UPPERCASE";
	

    break;
	
	case 4:
	echo "To replace \"the\" with \"That\" in \"".$s."\""."<br>";
echo str_replace("the","That",$s);

echo "<br>";
break;
	
}
}




?>
