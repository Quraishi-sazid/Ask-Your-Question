<?php
include 'database.php';
ob_start();
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>logout</title>
<link rel="stylesheet" href="css/question.css"/>
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

<p class="fix top">QUESTION OF USERS</p>
<hr />
<?php
    $sql="SELECT * FROM status";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res)){
		$about=$row['about'];
		$p=$row['heading']
		?>
  <a class="fix question_a" href="full_question.php?p=<?php echo $row['heading']; ?>" style="text-decoration:none;"><p class="heading"><?php echo $row['heading']; ?></p></a>
  <p class="fix question_p"><?php echo $row['status']; ?></p>
   <ul class="fix tag">
        <?php if(($_SESSION['id']=='1234')||($_COOKIE['id']=='1234')){ ?>

        <li><a href="delete.php?p=<?php echo $p;?>">Delete</a></li>
        <?php 
		}
		?>
   </ul>

<hr />

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