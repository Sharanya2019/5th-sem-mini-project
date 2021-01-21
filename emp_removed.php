<?php
$host    = "localhost";
$user    = "root";
$pass    = "";
$db_name = "services";
$id = $_POST['emp_id'];
$connection = mysqli_connect($host, $user, $pass, $db_name);
if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
}

$query = "delete from employee where emp_id='$id'";
$result = mysqli_query($connection,$query);
if($result)
{
	header("Location:add_success1.php");
}

?>