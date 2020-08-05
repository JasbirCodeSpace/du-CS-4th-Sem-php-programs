<!DOCTYPE html>
<html>
<head><Title>FIND | TABLES</Title></head>
<body>


<?php

$num = $_POST['num'];

echo '<center><table border="5" cellspacing="5" cellpadding="5">';

for($i=1;$i<=$num;$i++){
echo '<tr>';
for($j=1;$j<=10;$j++){
echo '<td>'.$i*$j.'</td>';
}
echo '</tr>';

}

echo '</table>';
?>


</body>
</html>
