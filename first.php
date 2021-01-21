 <html>

<title>SERVICE-BOX</title>
<style type="text/css">
.h1
{
	width: 100vw;
	height: 10vh;
	background-color: black;
	opacity: 0.65;
}
#h11
{
	font-size: 50;
	margin-left: 38vw;
	color: gold;
	position: center;
}
#h22
{
	font-size:30;
	margin-left:7em;
	margin-top:1em;
	color: white;
}

.b1
{
	background-color: black;
	opacity: 0.85;
	width: 37vw;
	height: 50vh;
	position: center;
	margin-left: 30vw;
	margin-top: 10vh;
	border-radius: 30px;
	color:white;
}

#b11
{
	margin-left: 8em;
	margin-top: 2em;
	font-size: 25;
}

#b12
{
	margin-left: 3em;
}
.button1
{
	margin-left: 11em;
	border-radius: 20px;
	width: 8em;
	height: 30px;  
	margin-top: 40px;
	background-color: white;
	border-color: red;
	font-size:17;
	text-align:center;
}

.b13
{
	margin-left: 25px;
}

.b14
{
	font-size: 10;
	margin-left: 25px;
	margin-top: 10px;
}

.button2
{
	width: 10em;
	height: 2em;
	margin-left: 25px;
	margin-top: 10px;
	padding-left: 10px;
	background-color: white;
	color: red;
}

.info
{
	width: 50vw;
	height: 70vh;
	background-color: white;
	opacity: 0.75;
	border-radius: 20px;
	position: absolute;
	margin-left: 80px;
	margin-top: 50px;
	padding: 25px;
}

.b14
{
	background-color: white;
	border-color: red;
	color: black;
	width: 10em;
	height: 20px;
	text-align: center;
	border-radius: 10px;
	margin-left: 12em;
	margin-top: 1em;
	font-size: 15;
	border-style: solid;
}


</style>
<head>  

<div class = "h1">
<div id="h11">
	<font face="Colonna MT">SERVICE BOX</font>
</div>
<br><br>
 <div id="h22">
 <font face="verdana">We are here to deliver more than expected</font>
</div>
<body>
<div class = "b1">
<div id = "b11">USER LOG IN</div>
<form action="" method="post">
<br><br>
<div id="b12">
Username : <input type="text" name = "user" placeholder="Email-id..." style="width: 60%; height: 40px; border-radius: 20px; border-style: none; padding-left: 10px;" required/><br><br>
Password : <input type="password" name="pass" placeholder="Enter Password" style="width: 60%; height: 40px; border-radius: 20px; border-style: none; padding-left: 10px;" required/>
</div>
<input type = "submit" value="Login" name="submit"/ class = "button1">
</form>

<a href="signup.php">
<div class="b14">SIGNUP</div>
</a>
<?php  
if(isset($_POST["submit"])){  
  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
  
    $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
    mysqli_select_db($con,'services') or die("cannot select DB");  
  
    $query=mysqli_query($con,"SELECT * FROM login WHERE username='".$user."' AND pass='".$pass."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['pass'];  
    }  
      
    
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
     
    header("Location: home.php");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  
</body>  
</html>   