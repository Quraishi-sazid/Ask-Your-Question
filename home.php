<?php
include 'database.php';
ob_start();
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>home</title>
<link rel="stylesheet" href="css/home.css"/>
</head>
<body>
<body>
<div class="fix main">
<div class="fix header">
<div id="tfheader">
        <h2>ASK and SOLUTION</h2>
		<form id="tfnewsearch" method="get" action="#">
		        <input type="text" class="tftextinput" name="q" size="21" maxlength="120"><input type="submit" value="search" class="tfbutton">
		</form>
	<div class="tfclear"></div>
    
	</div>
</div>

<div class="navigation">

<div class="fix navigation_bar">
<ul>
<li><a href="home.php">Home</a></li>
<li><a href="question.php">Question</a></li>
<?php 
if(($_SESSION['id'])||($_COOKIE['id'])){

?>
 <li><a href="ask.php">Ask Question</a></li>
<li><a href="#">profile</a></li>
<li><a href="logout.php">Logout</a></li>
<?php 

}else{
  echo '<li><a href="#">Guest</a></li>';
  echo '<li><a href="login.php">Login</a></li>';
  echo '<li><a href="register.php">Register</a></li>';
}
?>

</ul>
</div>

</div>

<div class="fix content">

<div class="fix content_middle">
<p class="fix top">Top Question</p>
<a class="fix top_a" href="#">Java</a>
<hr />
<br />
<?php 
    $tag_name="java";
    $sql="SELECT * FROM status WHERE about='$tag_name'";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res)){
	?>
    <a class="fix top_a_heading" href="#"><?php echo $row['heading'] ; ?></a>
    <p class="fix top_p_status"><?php echo $row['status'] ; ?></p>
<?php 
}
?>

<a class="fix top_a" href="#">C++</a>
<hr />
<br />
<?php 
    $tag_name="c++";
    $sql="SELECT * FROM status WHERE about='$tag_name'";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res)){
	?>
    <a class="fix top_a_heading" class="fix top_a_heading" href="#"><?php echo $row['heading'] ; ?></a>
    <p class="fix top_p_status"><?php echo $row['status'] ; ?></p>
<?php 
}
?>

</div>
</div>

</div>

<div class="fix footer">
 <p class="fix footer_text1 ">All right reserved by SAZID</p>
 <p class="fix footer_text2">CSE 2K12</p>
</div>


</body>
</html>