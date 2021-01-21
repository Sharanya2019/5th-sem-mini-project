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
$username = $_GET['username'];  
$password = $_GET['pass'];
$query = "SELECT * FROM login WHERE username='$username' and password = '$password'
$result = mysqli_query($connection,$query) or die(mysql_error());;
$data = mysqli_fetch_array($result);
$rows = mysqli_num_rows($result);

if($rows==1)
{
 header(location:'admin_home.php');
}
else{
	echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
}
		 
?>
