<?php

error_reporting(0);
 if($_SERVER["REQUEST_METHOD"] == "GET"){
    $email = $_GET["email"];
	
	
	$conn = mysqli_connect("localhost","root","","user") or die ("unsuccessfull");
	
	
$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i"; 
if(preg_match($pattern,$email)){
	echo "EMAIL FORMAT IS VALID";

	 $dom = explode("@",$email);
	 
	    $query = "select * from domain where domain_value='$dom[1]' ";
   
  $res = mysqli_query($conn,$query);

        $s=mysqli_fetch_array($res);  
		
		if($s){
			
			echo "<br>EMAIL DOMAIN IS PRESENT IN THE DATABASE";
    $pswrd = $_GET["pswrd"];

    
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
else{
		echo "<br>EMAIL DOMAIN IS NOT PRESENT IN THE DATABASE";
}

}
else{
	echo "EMAIL IS NOT VALID";

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
	 <form method="GET" action="21.php">
	   <h3><p>Email</p></h3>
	   <input type="text" name="email" placeholder="Enter Email" >
	   <h3><p>Password</p></h3>
	   <input type="password" name="pswrd" placeholder="*********" >
	   <br><br>
	   <input type="submit" name="submit" value="Sign In"  >
	   
	   </form>
	   
	   </center>

</body>

</html>

