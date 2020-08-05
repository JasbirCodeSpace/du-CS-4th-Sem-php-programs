<?php

error_reporting(0);
 if($_SERVER["REQUEST_METHOD"] == "GET"){


    $conn = mysqli_connect("localhost","root","","user") or die ("unsuccessfull");

  

   $query = "select * from marks ";
   
  $res = mysqli_query($conn,$query);

  
         
		 echo "<table border=\"5px\">";
       while( $row=mysqli_fetch_array($res)){
		   echo "<tr>"."<td>".$row["roll_no"]."</td>"."<td>".$row["name"]."</td>"."<td>".$row["subject1"]."</td>"."<td>".$row["subject2"]."</td>"."<td>".$row["subject3"]."</td>"."</tr>";
		   
	   }   

    echo "</table>";


 }
?>