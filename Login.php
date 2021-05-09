Code
<?php
$con=new mysqli("localhost","root","","osp_manya");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$a=$_POST["name"];
$b=$_POST["pass"];
$c=md5($b);
$query="insert into login(name,password) values('$a','$c')";
$con->query($query);
}
?>
<html>
<head>
<title> Login Form </title>
<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<form action="login.php" method="POST">
<div class="login-box">
<h1> Login </h1>
<div class="textbox">
<i class="fa fa-user" aria-hidden="false"></i>
<input type="text" placeholder="Username" name="name" value=""
required>
</div>
<div class="textbox">
<i class="fa fa-lock" style="color: black;" aria-hidden="true"></i>
<input type="password" placeholder="Password" name="pass" value=""
required>
</div>
<br><br>
<button class="btn" name="sub">Sign In</button>
</div>
</form>
</body>
</html>
