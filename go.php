<?php
ob_start();
session_start();

if(isset($_COOKIE['id'])||isset($_SESSION['id'])){
	header('Location:home.php');
}
else
{
	echo 'no';
}

?>