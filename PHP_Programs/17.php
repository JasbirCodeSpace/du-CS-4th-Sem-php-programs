<html>
	<head>
		<title> birth calculator</title>
	</head>
	
	<body>
		<?php
		
		error_reporting(0);
		$DOB=$_GET["name1"];
		$currdate=$_GET["name2"];
		$date1=date_create($DOB);
		$date2=date_create($currdate);
		$diff=date_diff($date1,$date2);
		
		echo "<center>";
		echo "<h1>"."YOU ARE ";
		echo $diff->format("%R%a days");
		echo " DAYS OLDER".'</h1>';
		
		$age = (int)($diff->format("%R%a days")/365);
		echo "<h1>"."THAT MEANS YOUR CURRENT AGE IS :".$age."YEARS"."</h1>";
		echo "</center>";
			
		?>
	</body>
</html>
