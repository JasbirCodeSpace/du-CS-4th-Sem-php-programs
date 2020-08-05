

<?php
$a=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
$choice = $_POST["num"];
switch($choice){
case 1 :   asort($a);
	echo "Sorting according to values: "."<br>";
	foreach ($a as $x=>$x_value){
	echo "Key: ".$x." Value: ".$x_value." ";
	echo "<br>";}


	break;

case 3 :  rsort($a);
	echo "Sorting according to values (reverse): "."<br>";
	foreach ($a as $y=>$y_value){
	echo "Key: ".$y." Value: ".$y_value." ";
	echo "<br>";}

	break;

case 2 :  ksort($a);
		echo "Sorting according to key: "."<br>";
		foreach ($a as $x=>$x_value){
		echo "Key: ".$x." Value: ".$x_value." ";
		echo "<br>";}

		break;

case 4 :   krsort($a);
		echo "Sorting according to key (reverse): "."<br>";
		foreach ($a as $x=>$x_value){
		echo "Key: ".$x." Value: ".$x_value." ";
		echo "<br>";}

		break;

default :   break;

}
?>

<!doctype html>
<html>
  <head>  <TITLE> Associative Array | Sort </TITLE> </head>

  <body>
    
    <center>
	
	<h4>Select Choice :</h4>
	<h6>1. Asscending Order Sort By Value</h6>
	<h6>2. Asscending Order Sort By key</h6>
	<h6>3. Descending Order Sort By Value</h6>
	<h6>4. Descending Order Sort By key</h6>
	
    <form method="POST" action="ques13.php" >

   
	    <pre >ENTER NUMBER       :</pre> <input type="number" name="num"/><BR/>

	    <bR/><bR/>
            <button type="submit" name="result">Get Result </button>

   </form>

   </center>

  </body>

</html>
