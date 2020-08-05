<?php

error_reporting(0);
 if($_SERVER["REQUEST_METHOD"] == "GET"){
    $email = $_GET["email"];
    $pswrd = $_GET["pswrd"];

    $conn = mysqli_connect("localhost","root","","user") or die ("unsuccessfull");
   //echo $conn;
  

   $query = "select * from user where email='$email' and pswrd='$pswrd' ";
   
  $res = mysqli_query($conn,$query);

        $s=mysqli_fetch_array($res);   

   if($s){

          echo "<center><h1>WELCOME</h1>";
		  echo "<table border=\"5px\" ><tr>";
		  
          
		    for($i=0;$i<sizeof($s);$i++)
                  echo "<td>".$s[$i]."</td>";
		  
		  
		   echo "</tr></table></center>";

       }


      else{

          
            echo "<h1>Not registered</h1>";

       }



 }
?>


<html>
<head>
<meta charset="utf-8">
<title>Login | User</title>

</head>


<body>


	 <center>
	 <h2>Log In Here</h2>
	 <form method="GET" action="20.php">
	   <h3><p>Email</p></h3>
	   <input type="email" name="email" placeholder="Enter Email">
	   <h3><p>Password</p></h3>
	   <input type="password" name="pswrd" placeholder="*********" >
	   <br><br>
	   <input type="submit" name="submit" value="Sign In" onclick="location.href='user.html';" >
	   
	   </form>
	   
	   </center>

</body>

</html>

