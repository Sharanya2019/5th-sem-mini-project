<html>

<style text="text/css">
.h1
{
	width: 100vw;
    height: 10vh;
	background-color: black;
	opacity: 0.85;
}
#h11
{
	font-size: 50;
	margin-left: 36vw;
	color: gold;
	position:center;
}
body
{
	margin: 0;
	padding: 0;
	background-color:Lavender;
	background-size: cover;
	background-repeat: no-repeat;
}

.b1
{
	position: absolute;
	font-size: 35px;
	color: Indigo;
	margin-left: 2vw;
	margin-top: 8vh;
}
.b2
{
	position: absolute;
	margin-left: 3vw;
}
#b22
{
	font-size: 35px;
	color: black;
}
</style>
<title>SERVICE BOX-Home</title>
<head>
<div class = "h1">
<div id="h11">
	<font face="Colonna MT">SERVICE BOX</font>
</div>
</head>
<body>
<div class="b1">Enter your Email-id</div>
<form action="final.php" method="POST">
<?php
$host    = "localhost";
$user    = "root";
$pass    = "";
$db_name = "services";
$connection = mysqli_connect($host, $user, $pass, $db_name);
if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
}
?>
<div class="b2">
<div id="b22">

Email:<input type="text" name="email" style="width: 20vw; height: 8vh; font-size: 30px; margin-left: 1vw; margin-top: 20vh;"required/>
<?php
$query = "select user_id,email from users";
$result = mysqli_query($connection,$query);
$data = mysqli_fetch_row($result);

?>
</select>
<br>
<input type="submit" value="CANCEL" style="width: 20vw; margin-left: 15vw; height: 8vh; font-size: 25px; margin-top: 15vh; background-color: red; opacity:0.65; color: white;">
</form>
</body>
</html>