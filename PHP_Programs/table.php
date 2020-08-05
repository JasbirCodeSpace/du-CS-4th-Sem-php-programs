<!Doctype html>
<html>
<head>

<title> FIND | TABLES</title>

</head>
<body>
<center>
<?php

$num = $_GET['num'];
$temp=0;

echo '<table border=10 cellspacing=5 cellpadding=5>';
for($i=1;$i<=$num;$i++){
  
  echo '<tr>';
  for($j=1;$j<=$num;$j++)
 {
  $temp = $i*$j;
  echo '<td>'.$temp.'</td>';

}
echo '</tr>';


}

echo '</table>';




?>
</center>
</body>
</html>
