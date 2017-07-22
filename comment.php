<?php
ob_start();
session_start();
include 'database.php';
$user_id=$_SESSION['id'];

$comment=$_POST['comment'];
$time=date("l jS \of F Y h:i:s A");
$name=user_name($user_id);
$heading=$_GET['m'];


status_update($comment,$time,$name,$heading);
header('Location:question.php');

function status_update($comment,$time,$name,$heading){
	$sql="INSERT INTO comment(comments,time,name,heading)VALUES('$comment','$time','$name','$heading')";
	mysql_query($sql);
}

?>

<?php

function user_name($id){
	
	$sql="SELECT * FROM register WHERE user_id='$id'";
	$result=mysql_query($sql);
	while($row=mysql_fetch_array($result)){
         $username=$row['username'];
		 return $username;
	}
}

?>