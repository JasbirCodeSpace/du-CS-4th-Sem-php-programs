<html>

   	<head><title>hello | different languages</title></head>

   	<body>
          <center>
     		<form action = "19.php" method = "GET">
   			<h1>PLEASE SELECT YOUR LANGUAGE:</h1>
    			<select name="name1">
       				<option   value="English" >English</option>
       				<option  value="Hindi" >Hindi</option>
       				<option  value="Urdu">Urdu</option>
  			</select>
  			<br><br> 
				<Button type = "submit" >Submit</Button>
			<br><br>
			
			</center>

	    		<?php
				
				error_reporting(0);
	       		$choice = $_GET["name1"];
				
				echo "<center><h1>";
	       		switch($choice)
			{
		  		case 'English':
		                	echo "Hello";
		                	break;

		  		case 'Hindi':
		                	echo "हेलो";
		                	break;

				case 'Urdu':
		                	echo "آداب";
		                	break;

	       		}
				
				echo "</h1></center>";

	   		?>
   		</form>

  	</body>

</html>
  
