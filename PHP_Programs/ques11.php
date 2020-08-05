<?php
$n=$_GET["n1"];
echo "<table border='2' align='center'>";
echo "<tr>";
for ($i=0;$i<strlen($n);$i++)
{
echo "<td>".$n[$i]."</td>";
}
echo "</tr>";
echo "</table>";

?>