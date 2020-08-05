<?PHP

$LIST = explode(',',$_GET["COLORS"]);

foreach($LIST as $x)
echo $x.' , ';

echo "<br>";

echo "<ul>";
foreach($LIST as $x)
echo "<li>".$x."</li>";

echo "</ul>";

?>



<HTML>

<HEAD>
<TITLE> LIST </TITLE>
</HEAD>

<BODY>
<CENTER><H1> LIST </H1>
<FORM METHOD="GET" >

ENTER COLORS(SEPARATED BY COMMAS ',')<INPUT TYPE="TEXT" NAME="COLORS"/>
<BUTTON TYPE = "SUBMIT" value="SUBMIT" NAME="BUTTON">
</FORM>

</BODY>
</CENTER>
</HTML>