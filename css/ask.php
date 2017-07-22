<?php 
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>home of abc</title>
<link rel="stylesheet" href="ask.css"/>
<link rel="stylesheet" href="css/ppppppp.css"/>

</head>

<body>
<div class="fix main">

<div class="fix header">
<div class="fix header">
<div id="tfheader">
        <h2>ASK and SOLUTION</h2>
		<form id="tfnewsearch" method="get" action="#">
		        <input type="text" class="fix tftextinput" name="q" size="21" maxlength="120"><input type="submit" value="search" class="tfbutton">
		</form>
	<div class="fix tfclear"></div>
    
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

</div>

<div class="fix content">

<p>How to Ask</p>
<hr />
<p>Welcome to Online Solution!</p>
<br />
<br />
<p>OUR GOAL:</p>
<hr />
<p>We like to help as many people at a time as we can. Make it clear how your question is relevant to more people than
 just you, and more of us will be interested in your question and willing to look into it.</p>
<br />
<br />
<p>HOW TO ASK QUESTION:</p>
<hr />
<p>This is a online solution website . If you have any question abot Programming and Others ,You can ask here frequently .
The answer to your question may not always be the one you wanted, but that doesn’t mean it is wrong. A conclusive answer 
isn’t always possible. When in doubt, ask people to cite their sources, or to explain how/where they learned something. 
Even if we don’t agree with you, or tell you exactly what you wanted to hear, remember: we’re just trying to help.</p>
<br />
<br />
<p>OUR QUESTION STANDARD:</p>
<hr />
<p>This is a online solution website . If you have any question abot Programming and Others ,You can ask here frequently .
The answer to your question may not always be the one you wanted, but that doesn’t mean it is wrong. A conclusive answer 
isn’t always possible. When in doubt, ask people to cite their sources, or to explain how/where they learned something. 
Even if we don’t agree with you, or tell you exactly what you wanted to hear, remember: we’re just trying to help.</p>
<br />

<div class="fix content_middle">
<form action="ask_process.php" class="fix form_ask" method="post">
<div>
<h1>ASK QUESTION :</h1>
<label>
<span>Heading of Question</span><input id="name" type="text" name="heading" />
</label>

<label>
<span>Question Tag</span><input id="email" type="text" name="about" />
</label>
<label>
<span>Question</span><br /><textarea id="feedback" name="status"></textarea>
</label>
<br />
<label>
<span>Paste code</span><br /><textarea name="code" cols="50" rows="6"></textarea>
<input type="submit" value="Submit Form" />
</label>

</div>
</form>

</div>

</div>

</div>

<div class="fix footer">
 <p class="fix footer_text1 ">All right reserved by SAZID</p>
 <p class="fix footer_text2">CSE 2K12</p>
</div>


</body>
</html>
