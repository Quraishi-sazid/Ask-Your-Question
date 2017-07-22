<?php
ob_start();
include "database.php";

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

insert($username,$email,$password);

header('Location:home.php');

 function insert($username,$email,$password){
	 $register="INSERT INTO register(username,email,password)VALUES('$username','$email','$password')";
	 mysql_query($register);
 }
 

?>