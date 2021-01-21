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
<div class="b1">Select Employee to be Removed</div>
<form action="emp_removed.php" method="POST">
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
Employee:<select name="emp_id" style="width: 20vw; height: 8vh; font-size: 30px; margin-left: 1vw; margin-top: 20vh;">
<?php
$query = "select emp_id,emp_name from employee";
$result = mysqli_query($connection,$query);
//$data = mysqli_fetch_row($result);
while($data = mysqli_fetch_row($result))
{
	$option = $data[0];
	$name = $data[1];
	echo "<option value='$option'>$name</option>";
}
?>
</select>
<br>
<input type="submit" value="REMOVE" style="width: 20vw; margin-left: 12vw; height: 8vh; font-size: 25px; margin-top: 15vh; background-color: red; opacity:0.65; color: white;">
</form>
</body>
</html>
