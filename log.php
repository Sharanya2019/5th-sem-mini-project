<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="start">
		<form action="" method="POST">
			<center>
			<h1>LOGIN</h1></center>
			
				
				<input type="text" name="username" class="txtbx" placeholder="Enter username"/><br/>
	
			    <input type="password" name="pass" class="txtbx" placeholder="Enter password"/><br/>
			
			
				<input type="submit" name="login" class="btn"/>
			
		</form>
	</div>	
</body>
</html>	

<?php
$dbhandle=mysqli_connect("localhost","root","");
$db=mysqli_select_db($dbhandle,'services');
if(isset($_POST['login']))
{
	$username=$_POST['username'];
	$pass=$_POST['pass'];


$result="select * from login where usename='$username'and pass='$pass'";
$row=mysqli_query($dbhandle,$result);
if(mysqli_fetch_array($row)>0)
{
 echo '<script type="text/javascript">alert("Logged In")</script>';
 
}
else{
echo '<script type="text/javascript">alert("Login failed")</script>';
}
}
?>
			    	