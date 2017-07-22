<?php 
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script>
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>

<script>

function validateForm(){
   var t=document.getElementById('username').value;
   var email = document.getElementById('email').value;
   var pass = document.getElementById('password').value;

 
   var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
 
   
     if(t.length == 0||isNaN(t) == false){
      alert('Please enter any value');
      return false;}
	  
	   else if(email.length == 0 || filter.test(email) != true){
     alert('Please enter valid email');
     return false;
     }
	  
	  else if(pass.length == 0){
		 alert('Please enter any password');
         return false;
	  }
	  
   else{
     alert('form submitted');
     return true;
   }
}

 </script>

<title>register</title>
<link rel="stylesheet" href="css/home.css"/>
 <link rel="stylesheet" href="css1/style.css">

</head>

<body>
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

<div class="fix login">
 <span href="#" class="button" id="toggle-login">Registration</span>

<div id="login">
  <div id="triangle"></div>
  <h1>Registration</h1>
  <form method="post" action="register_process.php" method="post" onsubmit="return validateForm()">
    <input type="text" name="username" placeholder="Name" id="username" onkeyup="showHint(this.value)"/>
    <p>Name: <span id="txtHint"></span></p>
    <input type="email" name="email" placeholder="Email" id="email"/>
    <input type="password" name="password" placeholder="Password" id="password"/>
    <input type="submit" value="Register" />
  </form>
</div>
</div>
</div>

<div>
</div>
<div class="fix footer">
 <p class="fix footer_text1 ">All right reserved by SAZID</p>
 <p class="fix footer_text2">CSE 2K12</p>
</div>


</body>
</html>