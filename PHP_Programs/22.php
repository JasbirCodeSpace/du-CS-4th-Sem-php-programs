<?php
error_reporting(0);
 if($_SERVER["REQUEST_METHOD"] == "GET"){
$conn = mysqli_connect("localhost","root","","user") or die ("unsuccessfull");


$name = $_GET["name"];
$roll_no = $_GET["roll_no"];
$mark1 = $_GET["mark1"];
$mark2 = $_GET["mark2"];
$mark3 = $_GET["mark3"];


$query = "insert into marks values('$roll_no','$name','$mark1','$mark2','$mark3')";
   
  $res = mysqli_query($conn,$query);

        $s=mysqli_fetch_array($res);   


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
	 <form method="GET" action="marks.php">
	   <h3><p>NAME</p></h3>
	   <input type="text" name="name" placeholder="Enter Name" >
	   <h3><p>ROLL NO.</p></h3>
	   <input type="text" name="roll_no" placeholder="Enter Roll No." >
	      <h3><p>SUBJECT 1</p></h3>
	   <input type="int" name="mark1" placeholder="Enter Marks" >
	      <h3><p>SUBJECT 2</p></h3>
	   <input type="int" name="mark2" placeholder="Enter Marks" >
	      <h3><p>SUBJECT 3</p></h3>
	   <input type="int" name="mark3" placeholder="Enter Marks" >
	   <br><br>
	   <input type="submit" name="submit" value="INSERT"  ><br>
	   <input type="reset" name="reset" value="Reset"  ><br>
	     <!--<input  value="SHOW DATABASE"  onclick="location.href='./marks.php';><br>-->
	   </form>
	   <!--<button  value="SHOW DATABASE"  onclick="location.href='./marks.php';><br>-->
	   </center>

</body>

</html>

