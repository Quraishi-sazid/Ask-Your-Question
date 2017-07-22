<?php
ob_start();
session_start();
include 'database.php';

$heading=$_POST['heading'];
$status=$_POST['status'];
$about=$_POST['about'];
$code=$_POST['code'];


status_update($heading,$status,$about,$code);
header('Location:ask.php');

function status_update($heading,$status,$about,$code){
	
	$sql="INSERT INTO status(heading,status,about,code)VALUES('$heading','$status','$about','$code')";
	mysql_query($sql);
}

?>