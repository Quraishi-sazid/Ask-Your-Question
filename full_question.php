<?php
include 'database.php';
ob_start();
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>home of abc</title>
<link rel="stylesheet" href="css/question.css"/>

</head>
<body>
<body>
<div class="fix main">
<div class="fix header">
<div id="tfheader">
        <h2>ONLINE SOLUTION</h2>
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
<?php
    $p=$_GET['p'];
    $sql="SELECT * FROM status WHERE heading='$p'";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res)){
		$m=$row['heading'];
	?>
    <a class="fix question_a" href="#" style="text-decoration:none;"><p class="heading"><?php echo $row['heading']; ?></p></a>
    <p  class="fix question_p"><?php echo $row['status']; ?></p>
    <pre class="fix course_code"><?php echo $row['code']; ?></pre>
<?php
	}
	
?>

<div class="fix comment" >
<?php 
if(($_SESSION['id'])||($_COOKIE['id'])){
?>

<form action="comment.php?m=<?php echo $m; ?>" method="post">
<h4 class="fix form_h4">Comment here</h4>
 <input type="text" name="comment" class="fix inputs" id="username"/>
 <input type="submit" value="comment" class="myButton" />
</form>
</div>
<?php 
}
?>

<div class="fix comment_show">

<?php
    $sql="SELECT * FROM comment WHERE heading='$m'";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res)){
	?>
    <hr />
    <p class="fix comment_name"><?php echo $row['name']; ?></p>
    <p class="fix comment_time"><?php echo $row['time']; ?></p>
    <p class="fix comment_comment"><?php echo $row['comments']; ?></p>
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