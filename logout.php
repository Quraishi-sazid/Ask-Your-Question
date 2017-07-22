<?php
session_start();
ob_start();
if(isset($_COOKIE['id'])||isset($_SESSION['id'])){
setcookie('id',$row['user_id'],time()-50);
session_destroy();
header('Location:home.php');

}else{
	
header('Location:home.php');	
}
?>