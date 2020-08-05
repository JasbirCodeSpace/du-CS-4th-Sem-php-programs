<?php
  
  $db = mysqli_connect('localhost','root','','USER') or die("unsucessfull");
  
  mysqli_query($db,"use USER");
  $query = "select * from user_info";
  $res = mysqli_query($db,$query) or die("unsucessfull");
  while($r = mysqli_fetch_array($res)){
	  
	  echo $r["userFname"];
  }
  

  $userFname = mysqli_real_escape_string($db, $_POST['first-name']);
  $userLname = mysqli_real_escape_string($db, $_POST['last-name']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $dob = mysqli_real_escape_string($db, $_POST['birthday']);
$email=mysqli_real_escape_string($db, $_POST['email']);
$pswrd_1=mysqli_real_escape_string($db, $_POST['password_1']);
$pswrd_2=mysqli_real_escape_string($db, $_POST['password_2']);

$contact=mysqli_real_escape_string($db, $_POST['contact']);
$aadhaar=mysqli_real_escape_string($db, $_POST['aadhaar']);
$house=mysqli_real_escape_string($db, $_POST['house']);
$city=mysqli_real_escape_string($db, $_POST['city']);
$pincode=mysqli_real_escape_string($db, $_POST['pincode']);
$state=mysqli_real_escape_string($db, $_POST['state']);
$country=mysqli_real_escape_string($db, $_POST['country']);



  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($userFname)) { array_push($errors, "Username is required"); }
  if (empty($userLname)) { array_push($errors, "Email is required"); }
  if (empty($gender)) { array_push($errors, "Password is required"); }
  if (empty($dob)) { array_push($errors, "Password is required"); }
  if (empty($email)) { array_push($errors, "Password is required"); }
  if (empty($pswrd_1)) { array_push($errors, "Password is required"); }
  if (empty($pswrd_2)) { array_push($errors, "Password is required"); }
  if (empty($contact)) { array_push($errors, "Password is required"); }
  if (empty($aadhaar)) { array_push($errors, "Password is required"); }
  if (empty($house)) { array_push($errors, "Password is required"); }
  if (empty($city)) { array_push($errors, "Password is required"); }
  if (empty($pincode)) { array_push($errors, "Password is required"); }
  if (empty($state)) { array_push($errors, "Password is required"); }
    if (empty($country)) { array_push($errors, "Password is required"); }
  
  if ($pswrd_1 != $pswrd_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  /*$user_check_query = "SELECT * FROM users WHERE email='$email';
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
    if($user['email']==$email) {
      array_push($errors, "email already exists");
    }
  */

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (userFname, userLname, gender,dob,email,pswrd_1,contact,aadhaar,house,city,pincode,state,country) 
  			  VALUES('$userFname','$userLname', '$gender','$dob','$email','$pswrd_1','$contact','$aadhaar','$house','$city','$pincode','$state','$country')";
  	mysqli_query($db, $query);
  	$_SESSION['userFname'] = $userFname;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }


?>