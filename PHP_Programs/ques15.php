<?php
echo "<table border='2' align='center'>";

$t=1;
for ($i=1;$i<=10;$i++)
{
echo "<tr>";
for ($j=1;$j<=10;$j++)
{
$t=$i*$j;
echo "<td align='center'>".$t."</td>";
}
$t=1;
echo "</tr>";
}

echo "</table>"
?>