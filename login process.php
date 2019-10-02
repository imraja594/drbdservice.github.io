<?php

session_start();


$username=$_POST['user'];
$password=$_POST['pass'];

$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);

   
	mysql_connect("localhost","root","");
 mysql_select_db('raja');

$result=mysql_query("Select * From registration where username = '$username' and password = '$password'")
           or die("Failed to query database ".mysql_error());
$row=mysql_fetch_array($result);

if ($row['username']==$username && $row['password']==$password)
{
   $_SESSION['username']=$username;
   header('location:main_page.html');	

}

else{
	echo"faild to login";
	header('location:faild.php');	
}



?>