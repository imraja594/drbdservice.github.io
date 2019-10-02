<?php

session_start();


$username = $_POST['username'];
$email = $_POST['email'];
$phone =$_POST['phone'];
$password = $_POST['password'];


if (!empty($username)|| !empty($email) || !empty($phone) || !empty($password)) {
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "raja";

	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    
    if (mysqli_connect_error()) {
    	die('connect error('. mysqli_connect_errno().')'.mysqli_connect_error());
    }
       else{
    	$SELECT = "SELECT email from registration where email = ? limit 1";
    	$INSERT = "INSERT Into registration (username, email, phone, password) values (?,?,?,?)";

      //prepare statement
       $stmt=$conn->prepare($SELECT);

       $stmt->bind_param("s", $email);
       $stmt->execute();
       $stmt->bind_result($email);
       $stmt->store_result();
       $rnum=$stmt->num_rows;

       if ($rnum==0) 
        {
      	$stmt->close();

      	$stmt =$conn->prepare($INSERT);
      	$stmt->bind_param("ssis", $username, $email, $phone, $password);
      	$stmt->execute();
      	
      	echo "New record insert sucessfully";
      	header('location:register.php');
      } else {
      	echo "Someone already register using this email";
      	header('location:already.php');
      }
      
      $stmt->close();
      $conn->close();
    }

} else{
   echo "All field are requred";
   
   die();
}

  ?>