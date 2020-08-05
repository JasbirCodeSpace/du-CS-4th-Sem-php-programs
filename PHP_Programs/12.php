<?php

$str = $_GET["array"];
$arr = explode(',',$str);


$min=100;
$max=0;

foreach($arr as $value){

if(strlen($value)>$max)
$max = strlen($value);

if(strlen($value)<$min)
$min = strlen($value);

}


echo "THE SHORTEST ARRAY LENGTH IS :",$min;

echo "THE LONGEST ARRAY LENGTH IS :",$max;


?>
<html>
<head>

<title> LENGTH ARRAY</title>

</head>
<body>
<form action="12.php" method="GET">
INPUT ARRAY (SEPARATED BY ',')<input type="text" name="array"></input>
<br>
<button type="submit">GET SORTED ARRAY</button>
</form>
</body>
</html>
