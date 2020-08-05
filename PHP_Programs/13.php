<?php

$choice = $_POST["num"];

$arr= array("Sophia"=>"31" , "Jacob"=>"41" , "William"=>"39" , "Ramesh"=>"40);

switch($choice){
	
case 1 :	asort($arr);
            for each($arr as key=>value){
				echo key ."=>".value;
			}
			
			echo "\n\n";
           break;
		   
case 2 :	aksort($arr);
             for each($arr as key=>value){
				echo key ."=>".value;
			}
			
			echo "\n\n";
           break;		   

case 3 :	rasort($arr);
            for each($arr as key=>value){
				echo key ."=>".value;
			}
			
			echo "\n\n";
           break;

case 4 :	raksort($arr);

             for each($arr as key=>value){
				echo key ."=>".value;
			}
			
			echo "\n\n";
           break;

default :		   
	
}
?>

<html>
  <head>  <TITLE> Associative Array | Sort </TITLE> </head>

  <body background="">
    
    <center>
	
	<h4>Select Choice :</h4>
	<h6>1. Asscending Order Sort By Value</h6>
	<h6>2. Asscending Order Sort By key</h6>
	<h6>3. Descending Order Sort By Value</h6>
	<h6>4. Descending Order Sort By key</h6>
	
    <form method="POST" action="13.php" >

   
	    <pre >ENTER NUMBER       :</pre> <input type="number" name="num"/><BR/>

	    <bR/><bR/>
            <button type="submit" name="result">Get Result </button>

   </form>

   </center>

  </body>

</html>
