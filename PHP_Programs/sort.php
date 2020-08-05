<!Doctype html>
<html>
<head>

<title> SORT ARRAY</title>

</head>
<body>
<center>
<?php

$str = $_GET['array'];
//echo $str;
$arr = array();

$arr = explode(',',$str);

$temp =0;

for($i=0;$i<sizeof($arr);$i++){
 for($j=sizeof($arr)-1;$j>$i;$j--){
  if($arr[$j]<$arr[$i]){
   $temp = $arr[$j];
   $arr[$j] = $arr[$i];
   $arr[$i] = $temp;
  }

}

}
echo "THE SORTED ARRAY IS:"."\n";
for($i=0;$i<sizeof($arr);$i++)
echo $arr[$i].' ';



?>
</center>
</body>
</html>
