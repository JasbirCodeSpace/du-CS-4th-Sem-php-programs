<!Doctype html>
<html>
<head>

<title> FIND | SHORT | LARGE</title>

</head>
<body>
<center>
<?php

$str = $_GET['array'];
//echo $str;
$arr = array();

$arr = explode(',',$str);

$small =1000000;
$large =0; 
$TEMP="";

for($i=0;$i<sizeof($arr);$i++){
  
  $TEMP = $arr[$i];
  if($small>strlen($TEMP)){
   $small = strlen($TEMP);
  }

  if($large<strlen($TEMP)){
   $large = strlen($TEMP);
  }

  //echo strlen($TEMP);



}

for($i=0;$i<sizeof($arr);$i++)
echo "\"".$arr[$i]."\"".' ';


echo "<br><br>THE SHORTEST ARRAY LENGTH IS   = ".$small;
echo "<br>THE LARGEST ARRAY LENGTH IS    = ".$large;



?>
</center>
</body>
</html>
